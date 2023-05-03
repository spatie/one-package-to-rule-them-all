<?php

namespace Spatie\NowPlaying;

use Spatie\NowPlaying\Exceptions\BadResponse;

class NowPlaying
{
    /** @var string */
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param $user
     *
     * @return array|bool
     *
     * @throws \Spatie\NowPlaying\Exceptions\BadResponse
     */
    public function getTrackInfo($user)
    {
        $lastFmResponse = $this->makeRequest($user);

        if (!isset($lastFmResponse['recenttracks'])) {
            throw BadResponse::create($lastFmResponse);
        }

        if (!count($lastFmResponse['recenttracks'])) {
            return false;
        };

        if (!isset($lastFmResponse['recenttracks']['track'][0])) {
            return false;
        }

        $lastTrack = $lastFmResponse['recenttracks']['track'][0];

        if (!isset($lastTrack['@attr']['nowplaying'])) {
            return false;
        }

        if (!$lastTrack['@attr']['nowplaying']) {
            return false;
        }

        return [
            'artist' => $lastTrack['artist']['#text'],
            'album' => $lastTrack['album']['#text'],
            'trackName' => $lastTrack['name'],
            'url'  => $lastTrack['url'],
            'artwork' => $this->getImage($lastTrack, 'extralarge'),
        ];
    }

    /**
     * @param string $user
     *
     * @return array
     */
    public function makeRequest($user)
    {
        $url = "https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&limit=1&user={$user}&api_key={$this->apiKey}&format=json";

        $response = file_get_contents($url);

        return json_decode($response, true);
    }

    /**
     * @param array $lastTrack
     * @param $versionName
     *
     * @return string
     */
    protected function getImage(array $lastTrack, $versionName)
    {
        foreach ($lastTrack['image'] as $image) {
            if ($image['size'] == $versionName) {
                return $image['#text'];
            }
        }

        return '';
    }
}

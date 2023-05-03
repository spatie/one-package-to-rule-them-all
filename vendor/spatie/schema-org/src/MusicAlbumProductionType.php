<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MusicAlbumProductionTypeContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * Classification of the album by its type of content: soundtrack, live album,
 * studio album, etc.
 *
 * @see https://schema.org/MusicAlbumProductionType
 * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class MusicAlbumProductionType extends BaseType implements MusicAlbumProductionTypeContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * CompilationAlbum.
     *
     * @see https://schema.org/CompilationAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const CompilationAlbum = 'https://schema.org/CompilationAlbum';

    /**
     * DJMixAlbum.
     *
     * @see https://schema.org/DJMixAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const DJMixAlbum = 'https://schema.org/DJMixAlbum';

    /**
     * DemoAlbum.
     *
     * @see https://schema.org/DemoAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const DemoAlbum = 'https://schema.org/DemoAlbum';

    /**
     * LiveAlbum.
     *
     * @see https://schema.org/LiveAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const LiveAlbum = 'https://schema.org/LiveAlbum';

    /**
     * MixtapeAlbum.
     *
     * @see https://schema.org/MixtapeAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const MixtapeAlbum = 'https://schema.org/MixtapeAlbum';

    /**
     * RemixAlbum.
     *
     * @see https://schema.org/RemixAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const RemixAlbum = 'https://schema.org/RemixAlbum';

    /**
     * SoundtrackAlbum.
     *
     * @see https://schema.org/SoundtrackAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const SoundtrackAlbum = 'https://schema.org/SoundtrackAlbum';

    /**
     * SpokenWordAlbum.
     *
     * @see https://schema.org/SpokenWordAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const SpokenWordAlbum = 'https://schema.org/SpokenWordAlbum';

    /**
     * StudioAlbum.
     *
     * @see https://schema.org/StudioAlbum
     * @link http://www.w3.org/wiki/WebSchemas/SchemaDotOrgSources#MBZ
     */
    public const StudioAlbum = 'https://schema.org/StudioAlbum';

    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }
}

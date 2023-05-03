<?php

namespace spatie\OnePackageToRuleThemAll\Commands;

use Exception;
use Illuminate\Console\Command;

final class PackageInspireCommand extends Command
{
    public $signature = 'package:inspire';

    public $description = 'Get some inspiration and courage to build your next package';

    public function handle()
    {
        $quotes = config('one-package-to-rule-them-all.quotes');

        if (! is_array($quotes)) {
            throw new Exception('Faithless is he that says farewell when the road darkens.');
        }

        // https://textart.sh/topic/ring
        $ring = <<<EOT
                ████████████████
          ██████░░░░░░░░░░░░░░░░██████
      ████░░░░░░░░▒▒▓▓▒▒▒▒▓▓▒▒▒▒░░░░░░████
    ██░░░░░░▒▒▓▓▒▒▒▒▓▓▓▓▓▓▒▒▓▓▓▓▒▒▒▒▒▒░░░░██
  ██░░▒▒▓▓▒▒▓▓▓▓▒▒▒▒▒▒▒▒▓▓▒▒▒▒▒▒▓▓▒▒▓▓▓▓▒▒░░██
██░░░░▒▒▓▓▓▓▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▓▓▓▓░░░░██
██░░░░░░▓▓▒▒▒▒▒▒████████████████▒▒▒▒▒▒▒▒░░░░▒▒██
██▒▒▒▒░░░░██████                ██████░░░░▒▒▒▒██
██░░▒▒▒▒░░░░░░░░████████████████░░░░░░░░▒▒░░▒▒██
██░░▒▒░░▒▒░░░░░░░░░░░░░░░░░░░░░░░░░░▒▒▒▒▒▒░░░░██
░░██░░░░░░░░▒▒▒▒░░▒▒░░░░▒▒░░▒▒░░░░▒▒░░▒▒░░░░██░░
░░░░██░░░░░░▒▒░░▒▒▒▒▒▒▒▒▒▒▒▒░░░░░░░░░░░░░░██░░░░
  ░░░░████░░░░░░░░░░░░▒▒░░░░░░░░░░░░░░████░░░░
    ░░▒▒░░██████░░░░░░░░░░░░░░░░██████▒▒░░░░
        ░░░░░░░░████████████████░░░░░░░░
              ░░▒▒░░░░░░░░░░░░░░▒▒

EOT;

        $this->info($ring);
        $this->alert(collect($quotes)->random());
    }
}

# Changelog

All notable changes to `laravel-server-monitor` will be documented in this file

## 1.9.3 - 2021-02-23

- add support for PHP 8

## 1.9.2 - 2020-09-09

- add support for Laravel 8

## 1.9.1 - 2020-08-20

- allow Guzzle 7

## 1.9.0 - 2020-03-03

- add support for Laravel 7

## 1.8.1 - 2019-09-20

- `next_run_in_minutes` can be set in config 

## 1.8.0 - 2019-09-04

- add support for Laravel 6

## 1.7.0 - 2019-02-27

- drop support for Laravel 5.7 and below
- drop support for PHP 7.1 and below

## 1.6.2 - 2019-02-27

- add support for Laravel 5.8

## 1.6.1 - 2019-02-01

- use Arr:: and Str:: functions

## 1.6.0 - 2019-01-31

- add `dump-checks` command

## 1.5.0 - 2019-01-10

- allow elastic search check to check other ips

## 1.4.2 - 2019-01-10

- fix memcached check

## 1.4.1 - 2018-08-27

- add support for Laravel 5.7

## 1.4.0 - 2018-07-02

- add `ssh_command_prefix` to config file

## 1.3.2 - 2018-02-18

- add support for L5.6

## 1.3.1 - 2017-12-15

- fix missing import in service provider

## 1.3.0 - 2017-12-13

- add ability to specify multiple mail addresses in the notifiable

## 1.2.1 - 2017-09-02

- add support for L5.5 auto discovery

## 1.2.0 - 2017-05-01

- make `Host` model configurable

## 1.1.1 - 2017-04-24

- make diskspace thresholds configurable

## 1.1.0 - 2017-04-19

- the notifiable now has access to the event that triggered the notification

## 1.0.9 - 2017-04-10

- make checks extensible

## 1.0.8 - 2017-03-21

- don't show output of curl in Elasticsearch check

## 1.0.7 - 2017-03-07

- improve the detection of failed processes

## 1.0.6 - 2017-03-05

- fix mail notifications

## 1.0.5 - 2017-03-05

- clean up migrations

## 1.0.4 - 2017-03-02

- fix for bug when using a custom model

## 1.0.3 - 2017-03-02

- further improvements for wrong value in `Next run` in list commands

## 1.0.2 - 2017-03-02

**THIS VERSION IS BROKEN, DO NOT USE**

- fix for wrong value in `Next run` in list commands

## 1.0.1 - 2017-03-02

**THIS VERSION IS BROKEN, DO NOT USE**

- fix for wrong value in `Next run` in list commands

## 1.0.0 - 2017-03-02

- initial release

# Changelog

All notable changes to `laravel-schedule-monitor` will be documented in this file

## 2.4.6 - 2021-11-02

- Make sure retryUntil is returning a DateTime (#66)

## 2.4.5 - 2021-09-16

- take environments property into account for scheduled tasks (#64)

## 2.4.4 - 2021-09-07

- add `retryUntil` for PingOhdearJobs (#63)

## 2.4.3 - 2021-08-02

- automatically retry ping if OhDear had downtime (#54)

## 2.4.2 - 2021-07-22

- add link to docs

## 2.4.1 - 2021-06-15

- update user API token url (#50)

## 2.4.0 - 2021-06-10

- enable custom models

## 2.3.0 - 2021-05-13

- add `storeOutputInDb`

## 2.2.1 - 2021-03-29

- upgrade to latest lorisleiva/cron-translator version (#40)

## 2.2.0 - 2021-01-15

- throw an exception if pinging Oh Dear has failed [#37](https://github.com/spatie/laravel-schedule-monitor/pull/37)
- pass 0 instead of null parameters to Oh dear for Background tasks [#37](https://github.com/spatie/laravel-schedule-monitor/pull/37)

## 2.1.0 - 2020-12-04

- add support for PHP 8

## 2.0.2 - 2020-10-14

- drop support for Laravel 7
- fix command description

## 2.0.1 - 2020-10-06

- report right exit code for scheduled tasks in background

## 2.0.0 - 2020-09-29

- add support for timezones

## 1.0.4 - 2020-09-08

- add support for Laravel 8

## 1.0.3 - 2020-07-14

- fix link config file

## 1.0.2 - 2020-07-14

- add `CarbonImmutable` support (#3)

## 1.0.1 - 2020-07-12

- improve output of commands

## 1.0.0 - 2020-07-09

- initial release

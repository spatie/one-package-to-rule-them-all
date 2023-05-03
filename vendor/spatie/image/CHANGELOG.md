# Changelog

All notable changes to `image` will be documented in this file

## 1.10.4 - 2021-04-07
- Allow spatie/temporary-directory v2

## 1.10.3 - 2021-03-10
- Bump league/glide to 2.0 [#123](https://github.com/spatie/image/pull/123)

## 1.10.2 - 2020-01-26

- change condition to delete $conversionResultDirectory (#118)

## 1.10.1 - 2020-12-27

- adds zoom option to focalCrop (#112)

## 1.9.0 - 2020-11-13

- allow usage of a custom `OptimizerChain` #110

## 1.8.1 - 2020-11-12

- revert changes from 1.8.0

## 1.8.0 - 2020-11-12

- allow usage of a custom `OptimizerChain` (#108)

## 1.7.7 - 2020-11-12

- add support for PHP 8

## 1.7.6 - 2020-01-26

- change uppercase function to mb_strtoupper instead of strtoupper (#99)

## 1.7.5 - 2019-11-23

- allow symfony 5 components

## 1.7.4 - 2019-08-28

- do not export docs

## 1.7.3 - 2019-08-03

- fix duplicated files (fixes #84)

## 1.7.2 - 2019-05-13

- fixes `optimize()` when used with `apply()` (#78)

## 1.7.1 - 2019-04-17

- change GlideConversion sequence (#76)

## 1.7.0 - 2019-02-22

- add support for `webp`

## 1.6.0 - 2019-01-27

- add `setTemporaryDirectory`

## 1.5.3 - 2019-01-10

- update lower deps

## 1.5.2 - 2018-05-05

- fix exception message

## 1.5.1 - 2018-04-18

- Prevent error when trying to remove `/tmp`

## 1.5.0 - 2018-04-13

- add `flip`

## 1.4.2 - 2018-04-11

- Use the correct driver for getting widths and height of images.

## 1.4.1 - 2018-02-08

- Support symfony ^4.0
- Support phpunit ^7.0

## 1.4.0 - 2017-12-05
- add `getWidth` and `getHeight`

## 1.3.5 - 2017-12-04
- fix for problems when creating directories in the temporary directory

## 1.3.4 - 2017-07-25
- fix `optimize` docblock

## 1.3.3 - 2017-07-11
- make `optimize` method fluent

## 1.3.2 - 2017-07-05
- swap out underlying optimization package

## 1.3.1 - 2017-07-02

- internally treat `optimize` as a manipulation

## 1.3.0 - 2017-07-02

- add `optimize` method

## 1.2.1 - 2017-06-29

- add methods to determine emptyness to `Manipulations` and `ManipulationSequence`

## 1.2.0 - 2017-04-17

- allow `Manipulations` to be constructed with an array of arrays

## 1.1.3 - 2017-04-07

- improve support for multi-volume systems

## 1.1.2 - 2017-04-04

- remove conversion directory after converting image

## 1.1.1 - 2017-03-17

- avoid processing empty manipulations groups

## 1.1.0 - 2017-02-06

- added support for watermarks

## 1.0.0 - 2017-02-06

- initial release

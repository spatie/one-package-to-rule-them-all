# Changelog

All notable changes to `data-transfer-object` will be documented in this file

## 2.8.3 - 2021-02-12

- Add support for using `collection` internally

## 2.8.2 - 2021-02-11

This might be a breaking change, but it was required for a bugfix

- Prevent DataTransferObjectCollection from iterating over array copy (#166)

## 2.8.1 - 2021-02-10

- Fix for incorrect return type (#164)

## 2.8.0 - 2021-01-27

- Allow the traversal of collections with string keys

## 2.7.0 - 2021-01-21

- Cast nested collections (#117)

## 2.6.0 - 2020-11-26

- Support PHP 8

## 2.5.0 - 2020-08-28

- Group type errors (#130)

## 2.4.0 - 2020-08-28

- Support for `array<int, string>` syntax (#136)

## 2.3.0 - 2020-08-19

- Add PHPStan extension to support `checkUninitializedProperties: true` (#135)

## 2.2.1 - 2020-05-13

- Validator for typed 7.4 properties (#109)

## 2.2.0 - 2020-05-08

- Add support for typed properties to DTO casting in PHP 7.4

## 2.0.0 - 2020-04-28

- Bump minimum required PHP version to 7.4
- Support for nested immutable DTOs (#86)

## 1.13.3 - 2020-01-29

- Ignore static properties when serializing (#88)

## 1.13.2 - 2020-01-08

- DataTransferObjectError::invalidType : get actual type before mutating $value for the error message (#81)

## 1.13.1 - 2020-01-08

- Improve extendability of DTOs (#80)

## 1.13.0 - 2020-01-08

- Ignore static properties (#82)
- Add `DataTransferObject::arrayOf` (#83)

## 1.12.0 - 2019-12-19

- Improved performance by adding a cache (#79)
- Add `FlexibleDataTransferObject` which allows for unknown properties to be ignored

## 1.11.0 - 2019-11-28 (#71)

- Add `iterable` and `iterable<\Type>` support

## 1.10.0 - 2019-10-16

- Allow a DTO to be constructed without an array (#68)

## 1.9.1 - 2019-10-03

- Improve type error message

## 1.9.0 - 2019-08-30

- Add DataTransferObjectCollection::items() 

## 1.8.0 - 2019-03-18

- Support immutability

## 1.7.1 - 2019-02-11

- Fixes #47, allowing empty dto's to be cast to using an empty array.

## 1.7.0 - 2019-02-04

- Nested array DTO casting supported.

## 1.6.6 - 2018-12-04

- Properly support `float`.

## 1.6.5 - 2018-11-20

- Fix uninitialised error with default value.

## 1.6.4 - 2018-11-15

- Don't use `allValues` anymore.

## 1.6.3 - 2018-11-14

- Support nested collections in collections
- Cleanup code

## 1.6.2 - 2018-11-14

- Remove too much magic in nested array casting

## 1.6.1 - 2018-11-14

- Support nested `toArray` in collections.

## 1.6.0 - 2018-11-14

- Support nested `toArray`.

## 1.5.1 - 2018-11-07

- Add strict type declarations

## 1.5.0 - 2018-11-07

- Add auto casting of nested DTOs

## 1.4.0 - 2018-11-05

- Rename to data-transfer-object

## 1.2.0 - 2018-10-30

- Add uninitialized errors.

## 1.1.1 - 2018-10-25

- Support instanceof on interfaces when type checking

## 1.1.0 - 2018-10-24

- proper support for collections of value objects

## 1.0.0 - 2018-10-24

- initial release

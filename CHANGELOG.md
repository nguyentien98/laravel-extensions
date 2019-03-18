CHANGELOG for 1.x
===================

This changelog references the relevant changes (features, bug and security fixes) done
in 1.x minor versions.

To get the diff for a specific change, go to https://github.com/sepiphy/laraveltools/commit/XXX where XXX is the change hash.
To get the diff between two versions, go to https://github.com/sepiphy/laraveltools/compare/v1.0.0...v1.0.1

### v1.1.2 (2019-03-16)

  * internal: Improve some development scripts.

### v1.1.1 (2019-03-10)

  * bug [Repositories] Correct `sepiphy/laravel-support` required version.

### v1.1.0 (2019-03-09)

  * feature [Console] Discover `ConsoleServiceProvider` automatically.
  * feature [Repositories] Discover `RepositoryServiceProvider` automatically.
  * feature [Support] Discover `SupportServiceProvider` automatically.

### v1.0.1 (2019-03-04)

  * bug [Repositories] Fix `Sepiphy\Laravel\Repositories\Repository::firstOrFail()` to match `Sepiphy\Laravel\Contracts\Repositories\Repository::firstOrFail()`.

### v1.0.0 (2019-03-02)

  * feature [Console] Add `app:name` artisan command.
  * feature [Console] Add `env:set` artisan command.
  * feature [Console] Add `make:class` artisan command.
  * feature [Console] Add `make:interface` artisan command.
  * feature [Console] Add `make:trait` artisan command.
  * feature [Console] Add `search` artisan command.
  * feature [Contracts] Add `Repository` interface.
  * feature [Repositories] Add `Repository` abstract class.
  * feature [Support] Add `Interaction` traits.
  * feature [Support] Add `Presenter` class.
  * feature [Support] Add `Query` class.

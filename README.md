# MediaWiki extension repository template

This repository template is designed to allow quickly building open-source MediaWiki extensions within the ecosystem. It comes with everything that's needed to help ensure the extension follows [MediaWiki's best practices](https://www.mediawiki.org/wiki/Best_practices_for_extensions) and [coding conventions](https://www.mediawiki.org/wiki/Manual:Coding_conventions).

## Roadmap

- [ ] Show examples of creating a [special page](https://www.mediawiki.org/wiki/Manual:Special_pages)
- [ ] Show examples of using [MediaWiki hooks](https://www.mediawiki.org/wiki/Manual:Hooks)
- [ ] Show examples of creating a [MediaWiki Action API](https://www.mediawiki.org/wiki/API:Main_page) module
- [ ] Show examples of creating a MediaWiki REST API endpoint
- [ ] Show examples of using [ResourceLoader](https://www.mediawiki.org/wiki/ResourceLoader) (MediaWiki's bundler system, comparable to software like Webpack, esbuild, and Rollup)
- [ ] Show examples of using PHPUnit with MediaWiki's core test infrastructure
- [ ] Integrate GitHub Actions for CI/CD

## Get started

### Prerequisites

First, make sure you have a local [MediaWiki instance running](https://www.mediawiki.org/wiki/Manual:Installing_MediaWiki). There is also a guide to [installing MediaWiki with Vagrant](https://www.mediawiki.org/wiki/MediaWiki-Vagrant), which automatically provisions a virtual machine with a MediaWiki instance and all of its dependencies.

### Creating a new repository

#### GitHub UI

You can create a new repository based on this template by clicking the "Use this template" button in the top-right corner of this page.

#### Terminal

You can run the following command below with the [GitHub CLI](https://cli.github.com/). Some notes:

- Replace placeholder with name of your extension in upper CamelCase
- Configure your repository's visibility with `--public`, `--private`, or `--internal`

```shell
gh repo create {{extension-uc}} --clone --template neoncitylights/mediawiki-extension-template
```

### Cookiecutter stuff

Using your favorite text editor or IDE, find-and-replace the following placeholders:

- `{{author}}`: Your own username/nickname, name, or organization
- `{{extension-uc}}`: Name of your extension in upper CamelCase
- `{{extension-lc}}`: Name of your extension in lower case

### Running the extension locally

To get started, run the following commands in your terminal. This assumes you're in the **root directory** of your MediaWiki extension.

```shell
npm install      # Install Node.js developer dependencies
composer install # Install Composer developer dependencies
```

Then, in your MediaWiki's instance containing `LocalSettings.php`, add the following line at the bottom:

```php
wfLoadExtension( 'BoilerPlate' ); // Replace "BoilerPlate" with the name of your extension
```

## Setup and configure

- MediaWiki extension configuration: [`extension.json`](./extension.json) • [[docs](https://www.mediawiki.org/wiki/Manual:Extension.json), [schema reference](https://www.mediawiki.org/wiki/Manual:Extension.json/Schema)]
- NPM configuration: [`package.json`](./package.json) • [[docs](https://docs.npmjs.com/cli/v9/configuring-npm/package-json), [website](https://www.npmjs.com/), [repo](https://github.com/npm/cli)]
- Composer configuration: [`composer.json`](./composer.json) • [[docs](https://getcomposer.org/doc/04-schema.md), [website](https://getcomposer.org/), [repo](https://github.com/composer/composer)]
- Localization and translated messages: [`i18n/`](./i18n/) • [[docs](https://www.mediawiki.org/wiki/Localisation)]
- ESLint (JS linter): [`.eslintrc.json`](./.eslintrc.json), [`.eslintignore`](./.eslintignore) • [[docs](https://eslint.org/docs/latest/use/configure/), [website](https://eslint.org/), [repo](https://github.com/eslint/eslint)]
- Gruntfile (JS task runner): [`Gruntfile.js`](./Gruntfile.js) • [[docs](https://gruntjs.com/configuring-tasks), [website](https://gruntjs.com/), [repo](https://github.com/gruntjs/grunt)]
- Stylelint (CSS linter): [`.stylelintrc.json`](./.stylelintrc.json), [`.stylelintignore`](./.stylelintignore) • [[docs](https://stylelint.io/docs/user-guide/configuration), [website](https://stylelint.io/), [repo](https://github.com/stylelint/stylelint)]
- PHPCS (PHP linter): [`phpcs.xml`](./phpcs.xml) • [[repo](https://github.com/squizlabs/PHP_CodeSniffer)]
- Phan (PHP static analysis): [`.phan/config.php`](./.phan/config.php) • [[mw.org docs](https://www.mediawiki.org/wiki/Continuous_integration/Phan), [phan repo](https://github.com/phan/phan/), [mw plugin repo](https://gerrit.wikimedia.org/g/mediawiki/tools/phan/SecurityCheckPlugin)]
- PHPUnit (PHP unit testing framework): [`phpunit.xml.dist`](./phpunit.xml.dist) • [[docs](https://docs.phpunit.de/en/10.2/configuration.html), [website](https://phpunit.de/), [repo](https://github.com/sebastianbergmann/phpunit)]
- Dependabot (dependency update automation): [`.github/dependabot.yml`](./.github/dependabot.yml) • [[docs](https://docs.github.com/en/code-security/dependabot/dependabot-version-updates/configuration-options-for-the-dependabot.yml-file)]

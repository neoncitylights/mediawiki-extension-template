# MediaWiki extension repository template

This repository template is designed to allow quickly building open-source MediaWiki extensions within the ecosystem. It comes with everything that's needed to help ensure the extension follows [MediaWiki's best practices](https://www.mediawiki.org/wiki/Best_practices_for_extensions) and [coding conventions](https://www.mediawiki.org/wiki/Manual:Coding_conventions).

## Roadmap

- [ ] Show examples of creating a special page
- [ ] Show examples of using MediaWiki hooks
- [ ] Show examples of creating a MediaWiki Action API module
- [ ] Show examples of creating a MediaWiki REST API endpoint
- [ ] Show examples of using ResourceLoader
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

- MediaWiki extension configuration: [`extension.json`](./extension.json)
- NPM configuration: [`package.json`](./package.json)
- Composer configuration: [`composer.json`](./composer.json)
- Localization and translated messages: [`i18n/`](./i18n/)
- ESLint (JS linter): [`.eslintrc.json`](./.eslintrc.json), [`.eslintignore`](./.eslintignore)
- Gruntfile (JS task runner): [`Gruntfile.js`](./Gruntfile.js)
- Stylelint (CSS linter): [`.stylelintrc.json`](./.stylelintrc.json), [`.stylelintignore`](./.stylelintignore)
- PHPCS (PHP linter): [`phpcs.xml`](./phpcs.xml)
- PHPUnit (PHP unit testing framework): [`phpunit.xml.dist`](./phpunit.xml.dist)

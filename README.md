# UT Martin Sigma Phi Epsilon WordPress Theme

This is a theme for the Sigma Phi Epsilon chapter at the University of Tennessee at Martin.

## Development

### Requirements

- NodeJS / NPM

```bash
# Install Gulp
$ npm i -g gulp-cli

# Install dependencies
$ npm install

# Compile the assets
$ gulp build

# Watch for changed assets
$ gulp
```

## Deployment

### Requirements

- [whiskey_disk](https://github.com/flogic/whiskey_disk)

Staging/Development

```bash
$ wd deploy --to=staging
```

Production

```bash
$ wd deploy --to=production
```

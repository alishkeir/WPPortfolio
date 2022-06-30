const { version } = require('./package.json');
const { writeFileSync } = require('fs-extra');
const { resolve } = require('path');

const commitCount = require('git-commit-count');

count = commitCount('https://bitbucket.org/itxi/beirut.com-wordpress/commits/');

writeInfo(count);

function writeInfo(count) {
    const file = resolve(__dirname, 'src', 'js', 'consts', 'version.js');

    writeFileSync(
        file,
        `// IMPORTANT: THIS FILE IS AUTO GENERATED! DO NOT MANUALLY EDIT\n\nexport const VERSION = '${version.toString()}';\nexport const REVISION = ${count};\n\n// IMPORTANT: THIS FILE IS AUTO GENERATED! DO NOT MANUALLY EDIT\n`,
        { encoding: 'utf-8' }
    );
}

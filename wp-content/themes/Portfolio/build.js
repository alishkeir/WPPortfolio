const { exec } = require("child_process");
const fsExtra = require("fs-extra");
const copydir = require("copy-dir");
const fs = require("fs");

let ENV = "development";

exec("git rev-parse --abbrev-ref HEAD", (err, stdout, stderr) => {
  console.log(stdout.trim());
  if (typeof stdout === "string") {
    ENV = stdout.trim();
    console.log(`Current Enviroment ${ENV}`);
    writePHPConfig();
    writeJSConfig();
  }
});

const phpPaths = {
  staging: "./inc/includes/environments/environment.staging.json",
  development: "./inc/includes/environments/environment.dev.json",
  main: "./inc/includes/environments/environment.prod.json",
};

const jsPaths = {
  staging: "./src/js/enviroments/enviroment.staging.js",
  development: "./src/js/enviroments/enviroment.dev.js",
  main: "./src/js/enviroments/enviroment.prod.js",
};

const phpEnviromentDest = "./inc/includes/environments/environment.json";
const jsEnviromentDest = "./src/js/enviroments/enviroment.js";

function writePHPConfig() {
  fsExtra.readJson(phpPaths[ENV]).then((json) => {
    _e = { ...json };

    fs.writeFile(phpEnviromentDest, JSON.stringify(_e), function (err) {
      if (err) throw err;
      console.log("PHP Builder Config written successfully");
    });

    return;
  });
}

function writeJSConfig() {
  copydir(jsPaths[ENV], jsEnviromentDest, function (err) {
    if (err) {
      throw err;
    } else {
      console.log("JS written successfully");
    }
  });
}

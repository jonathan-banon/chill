

#!/bin/sh
export NVM_DIR=$HOME/.nvm
source $NVM_DIR/nvm.sh
nvm use v15.7.0

symfony server:start -d
yarn encore dev --watch

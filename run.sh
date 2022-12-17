#!/bin/bash

function install {
  echo "install task not implemented"
}

function build {
  echo "build task not implemented"
}

function start {
  echo "start task not implemented"
}

function default {
  start
}

function help {
  echo "$0 <task> <args>"
  echo "Tasks:"
  # https://www.gnu.org/software/bash/manual/bash.html#index-compgen
  compgen -A function | cat -n
}

# https://www.gnu.org/savannah-checkouts/gnu/bash/manual/bash.html#index-TIMEFORMAT
TIMEFORMAT="Task completed in %3lR"
time ${@:-default}

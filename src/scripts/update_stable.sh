#!/bin/sh

VERSION="$1"
sudo -u web ln -sf "/usr/local/www/arturo/main/versions/$VERSION" /usr/local/www/arturo/main/versions/stable
echo "✅ Stable symlink updated to $VERSION"
# PHP Pearson Hashing

Implementation [Pearson Hashing](https://en.wikipedia.org/wiki/Pearson_hashing) algorithm for PHP.

# Usage

```
git clone --depth 1 ssh://git@github.com/t-kuni/php-cli-app-template [ProjectName]
cd [ProjectName]
rm -rf .git 
```

# Build

Build container.

```
docker-compose build app-debug
```

Install php libraries.

```
docker-compose run --rm app-debug composer install
```

Install node packages.  
Run follow command on host OS.

```
npm install
```

# Run app

```
docker-compose run --rm app-debug
```

# Start shell

```
docker-compose run --rm app-debug sh
```
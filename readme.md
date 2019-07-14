## build
docker build -t ipcheck:test .

## run
docker run --rm -p8000:80 ipcheck:test

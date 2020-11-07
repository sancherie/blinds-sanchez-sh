##############
# BASE IMAGE #
##############
FROM nginx:1.17.5-alpine

# Change the current working directory
WORKDIR /code

# Copy the app
COPY storage storage
COPY public public

# Copy the nginx configuration file
COPY .docker/nginx/default.conf /etc/nginx/conf.d/default.conf

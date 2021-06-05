FROM ubi7/ubi:7.7
MAINTAINER marcos <marcos@test.com>
LABEL description="A basic Apache container on RHEL 7 UBI"
RUN yum install -y httpd php-mysqlnd php && \
    yum clean all
RUN echo "Hello from Dockerfile" > /usr/share/httpd/noindex/index.html
COPY ./src/ /var/www/html/
EXPOSE 80
ENTRYPOINT ["httpd", "-D", "FOREGROUND"]

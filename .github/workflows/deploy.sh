#!/bin/bash

# Definisikan variabel-variabel yang diperlukan
REMOTE_HOST="ecs-user@47.236.31.81"
REMOTE_DIR="/opt/lampp/github/"
PASSWORD="Stiga4990l-"

# Jalankan perintah untuk menyalin file ke server
sshpass -p "$PASSWORD" scp -r ./opt/lampp/github/* $REMOTE_HOST:$REMOTE_DIR

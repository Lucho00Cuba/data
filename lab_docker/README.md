# Pequeño Script para Desplegar un Laboratorio de Pentesting Web con Docker

## Uso

```shell
lucho@server:~/lab_docker$ python3 lab_docker.py --help
usage: lab_docker.py [-h] [--list] [--start] [--name NAME] [--port PORT] [--app APP] [--version]
       lab_docker.py --list
       lab_docker.py --start --name [name-container] --port [port] --app [app]
       lab_docker.py --stop --name [name-container]
       lab_docker.py --status --name [name-container]

optional arguments:
  -h, --help   show this help message and exit
  --list       List for Apps
  --start      Start Container
  --stop       Stop Container
  --status     Status Containers
  --name NAME  Name for Deploy
  --port PORT  Port Pulic Deploy
  --app APP    App for Deploy
  --version    show program's version number and exit
```

### Apps vulnerables Soportadas

* DVWA
* Multillidae
* Juice-Shop

#!/usr/bin/python3
#
# Author Lucho (<Just Me>)
#  
#####################################

import time
import argparse
import subprocess 

#################
#   Functions   #
#################

def apps():
    print("""
    Available pentest applications"
      dvwa              - Damn Vulnerable Web Application
      mutillidae        - OWASP Mutillidae II
      juice-shop         - OWASP Juice Shop
    """)

def start_app(name,port,app):
    print("Iniciando contenedor")
    if app == "dvwa":
        start_docker = subprocess.call(f'docker run -dit --name {name} -p {port}:80 vulnerables/web-dvwa', shell=True)
    elif app == "multillidae":
        start_docker = subprocess.call(f'docker run -dit --name {name} -p {port}:80 szsecurity/mutillidae', shell=True)
    elif app == "juice-shop":
        start_docker = subprocess.call(f'docker run -dit --name {name} -p {port}:80 bkimminich/juice-shop', shell=True)
    else:
        print("lab_docker.py --list")

def stop_app(name):
    print("Deteniendo contenedor")
    stop_docker = subprocess.call(f'docker rm -fv {name}', shell=True)

def status_apps():
    #status_docker = os.system('docker ps')
    status_docker = subprocess.call('docker ps', shell=True)
    return status_docker

#################
#   Variables   #
################

list_lab = "0"
start_lab = "0"
stop_lab = "0"
status_lab = "0"

#################
#     MAIN	    #
#################

if __name__ == '__main__':

    parser = argparse.ArgumentParser(
        usage='''lab_docker.py [-h] [--list] [--start] [--name NAME] [--port PORT] [--app APP] [--version]
       lab_docker.py --list
       lab_docker.py --start --name [name-container] --port [port] --app [app]
       lab_docker.py --stop --name [name-container]
       lab_docker.py --status --name [name-container]''')
    parser.add_argument('--list', help='List for Apps', dest='list_lab', action='store_const', const=list_lab)
    parser.add_argument("--start", help="Start Container", dest='start_lab', action='store_const', const=start_lab)
    parser.add_argument("--stop", help="Stop Container", dest='stop_lab', action='store_const', const=stop_lab)
    parser.add_argument("--status", help="Status Containers", dest='status_lab', action='store_const', const=status_lab)
    parser.add_argument('--name', help='Name for Deploy')
    parser.add_argument('--port', help='Port Pulic Deploy')
    parser.add_argument('--app', help='App for Deploy')
    parser.add_argument('--version', action='version', version='Lab Pentesting Docker 1.0')
    args = parser.parse_args()

    if args.list_lab == "0":
        apps()
    elif args.start_lab == "0" and args.app is not None and args.name is not None and args.port is not None:
        start_app(args.name,args.port,args.app)
    elif args.stop_lab == "0" and args.name is not None:
        stop_app(args.name)
    elif args.status_lab == "0":
        status_apps()
    else:
        parser.print_help()

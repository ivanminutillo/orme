#!/usr/bin/python
# -*- coding: utf-8 -*-
#
# Fabric 0.9/1.x – Synchronize files in a project folder with webserver

from fabric.api import env
from fabric.contrib.project import rsync_project

env.hosts = ['178.62.81.130']
env.path = '/var/www/orme'
env.user = 'root'

def sync():
    """
    Synchronize project with webserver
    """
    rsync_project(env.path, delete=True, exclude=['*.pyc','*.py','.DS_Store', 'bower_components', 'node_modules', '.git'])
#!/bin/bash
socat tcp-l:9999,reuseaddr,fork EXEC:"python3 server.py",stderr

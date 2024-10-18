#!/bin/bash
socat tcp-l:12591,reuseaddr,fork EXEC:"python3 server.py",stderr

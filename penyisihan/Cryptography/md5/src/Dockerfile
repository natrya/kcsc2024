FROM ubuntu:22.04
RUN apt update --fix-missing && apt install -y libseccomp-dev xinetd python3 python3-pip socat
RUN groupadd -r ctf && useradd -r -g ctf ctf
RUN pip3 install pycryptodome pwntools
WORKDIR /home/ctf
COPY server.py .
COPY flag.txt .
COPY run.sh .
RUN chmod +x run.sh
RUN chown -R ctf:ctf /home/ctf
USER ctf
EXPOSE 1001
CMD ["./run.sh"]

FROM python:3.11-slim
ENV PYTHONDONTWRITEBYTECODE=1
ENV PYTHONUNBUFFERED=1
WORKDIR /app
COPY src/requirements.txt .
RUN pip install --upgrade pip
RUN pip install -r requirements.txt
COPY src/ /app/
RUN adduser --disabled-password appuser
USER appuser
EXPOSE 5000
ENV User_Agent='kcsc2024'
ENV FLAG='KCSC{4g3nt_1s_m1st3ry}'
CMD ["python", "app.py"]

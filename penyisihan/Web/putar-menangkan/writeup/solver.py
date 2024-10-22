import requests

HOST = "http://localhost:3003"

s = requests.Session()
for i in range(20):
    resp = s.post(f"{HOST}/slot.php", json={"puter": [100, 100, 100]})
    print(resp.content)

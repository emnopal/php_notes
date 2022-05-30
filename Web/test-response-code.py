import requests

body = {
    "username": "admin",
    "password": "admin"
}

print(requests.post("http://localhost:8080/Session/login.php", data=body).status_code)
print(requests.get("http://localhost:8080/Session/login.php", data=body).text)

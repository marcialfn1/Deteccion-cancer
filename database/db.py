import pymysql

db_config = {
    'host': 'localhost',
    'user': 'root',
    'password': '',
    'database': 'ia',
}
db = pymysql.connect(**db_config)

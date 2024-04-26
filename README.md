# DB schema
```
A <==> B --> C  
   AB  
```

# query
trying to find every A for a precise C_id, navigating through B


# run the test
- create a mariaDB schema named "cortex-bug" with "cortex-bug" as user and password
- exec data.sql script
- run composer install
- change $id_tested value in index.php (1, 2, 30, 4)
- open project into browser
you should reproduce de bug.


# nota
bug seems only to happen when A.id = B.id (see test data in data.sql)

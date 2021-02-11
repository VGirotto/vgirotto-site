<?php
    # This function reads your DATABASE_URL config var and returns a connection
    # string suitable for pg_connect. Put this in your app.
    function pg_connection_string_from_database_url() {
        extract(parse_url($_ENV["DATABASE_URL"]));

        
        return "user=$user password=$pass host=$host dbname=" . substr($path, 1);

        # pra testar localmente tem que usar o string direta
        #return "dbname=d7jchqr5rc26er OMITIDO O RESTO";
    }

    # Here we establish the connection. Yes, that's all.
    $pg_conn = pg_connect(pg_connection_string_from_database_url());

    
?>
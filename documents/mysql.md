
<p align="center"><img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" width="250"></p>


***What is MYSQL server?***
===

## MySQL is a database management system.

A database is a structured collection of data. It may be anything from a simple shopping list to a picture gallery or the vast amounts of information in a corporate network. To add, access, and process data stored in a computer database, you need a database management system such as MySQL Server. Since computers are very good at handling large amounts of data, database management systems play a central role in computing, as standalone utilities, or as parts of other applications.

## MySQL databases are relational.

A relational database stores data in separate tables rather than putting all the data in one big storeroom. The database structures are organized into physical files optimized for speed. The logical model, with objects such as databases, tables, views, rows, and columns, offers a flexible programming environment. You set up rules governing the relationships between different data fields, such as one-to-one, one-to-many, unique, required or optional, and “pointers” between different tables. The database enforces these rules, so that with a well-designed database, your application never sees inconsistent, duplicate, orphan, out-of-date, or missing data.

The SQL part of “MySQL” stands for “Structured Query Language”. SQL is the most common standardized language used to access databases. Depending on your programming environment, you might enter SQL directly (for example, to generate reports), embed SQL statements into code written in another language, or use a language-specific API that hides the SQL syntax.

SQL is defined by the ANSI/ISO SQL Standard. The SQL standard has been evolving since 1986 and several versions exist. In this manual, “SQL-92” refers to the standard released in 1992, “SQL:1999” refers to the standard released in 1999, and “SQL:2003” refers to the current version of the standard. We use the phrase “the SQL standard” to mean the current version of the SQL Standard at any time.

## MySQL software is Open Source.

Open Source means that it is possible for anyone to use and modify the software. Anybody can download the MySQL software from the Internet and use it without paying anything. If you wish, you may study the source code and change it to suit your needs. The MySQL software uses the GPL (GNU General Public License), http://www.fsf.org/licenses/, to define what you may and may not do with the software in different situations. If you feel uncomfortable with the GPL or need to embed MySQL code into a commercial application, you can buy a commercially licensed version from us. See the MySQL Licensing Overview for more information (http://www.mysql.com/company/legal/licensing/).

## The MySQL Database Server is very fast, reliable, scalable, and easy to use.

If that is what you are looking for, you should give it a try. MySQL Server can run comfortably on a desktop or laptop, alongside your other applications, web servers, and so on, requiring little or no attention. If you dedicate an entire machine to MySQL, you can adjust the settings to take advantage of all the memory, CPU power, and I/O capacity available. MySQL can also scale up to clusters of machines, networked together.

MySQL Server was originally developed to handle large databases much faster than existing solutions and has been successfully used in highly demanding production environments for several years. Although under constant development, MySQL Server today offers a rich and useful set of functions. Its connectivity, speed, and security make MySQL Server highly suited for accessing databases on the Internet.

## MySQL Server works in client/server or embedded systems.

The MySQL Database Software is a client/server system that consists of a multithreaded SQL server that supports different back ends, several different client programs and libraries, administrative tools, and a wide range of application programming interfaces (APIs).

We also provide MySQL Server as an embedded multithreaded library that you can link into your application to get a smaller, faster, easier-to-manage standalone product.

## A large amount of contributed MySQL software is available.

MySQL Server has a practical set of features developed in close cooperation with our users. It is very likely that your favorite application or language supports the MySQL Database Server.

The official way to pronounce “MySQL” is “My Ess Que Ell” (not “my sequel”), but we do not mind if you pronounce it as “my sequel” or in some other localized way.

***What are feature of MYSQL server?***
===

## Internals and Portability
- Written in C and C++.
- Tested with a broad range of different compilers.
- Works on many different platforms. See https://www.mysql.com/support/supportedplatforms/database.html.
- For portability, configured using CMake.
- Tested with Purify (a commercial memory leakage detector) as well as with Valgrind, a GPL tool (http://developer.kde.org/~sewardj/).
- Uses multi-layered server design with independent modules.
- Designed to be fully multithreaded using kernel threads, to easily use multiple CPUs if they are available.
- Provides transactional and nontransactional storage engines.
- Uses very fast B-tree disk tables (MyISAM) with index compression.
- Designed to make it relatively easy to add other storage engines. This is useful if you want to provide an SQL interface for an in-house database.
- Uses a very fast thread-based memory allocation system.
- Executes very fast joins using an optimized nested-loop join.
- Implements in-memory hash tables, which are used as temporary tables.
- Implements SQL functions using a highly optimized class library that should be as fast as possible. Usually there is no memory allocation at all after query initialization.
- Provides the server as a separate program for use in a client/server networked environment, and as a library that can be embedded (linked) into standalone applications. Such applications can be used in isolation or in environments where no network is available.

## Data Types
- Many data types: signed/unsigned integers 1, 2, 3, 4, and 8 bytes long, FLOAT, DOUBLE, CHAR, VARCHAR, BINARY, VARBINARY, TEXT, BLOB, DATE, TIME, DATETIME, TIMESTAMP, YEAR, SET, ENUM, and OpenGIS spatial types. See Chapter 11, Data Types.
- Fixed-length and variable-length string types.

## Statements and Functions
- Full operator and function support in the SELECT list and WHERE clause of queries. For example:

`mysql> SELECT CONCAT(first_name, ' ', last_name)
    -> FROM citizen
    -> WHERE income/dependents > 10000 AND age > 30;`

- Full support for SQL GROUP BY and ORDER BY clauses. Support for group functions (COUNT(), AVG(), STD(), SUM(), MAX(), MIN(), and GROUP_CONCAT()).
- Support for LEFT OUTER JOIN and RIGHT OUTER JOIN with both standard SQL and ODBC syntax.
- Support for aliases on tables and columns as required by standard SQL.
- Support for DELETE, INSERT, REPLACE, and UPDATE to return the number of rows that were changed (affected), or to return the number of rows matched instead by setting a flag when connecting to the server.
- Support for MySQL-specific SHOW statements that retrieve information about databases, storage engines, tables, and indexes. Support for the INFORMATION_SCHEMA database, implemented according to standard SQL.
- An EXPLAIN statement to show how the optimizer resolves a query.
- Independence of function names from table or column names. For example, ABS is a valid column name. The only restriction is that for a function call, no spaces are permitted between the function name and the “(” that follows it. See Section 9.3, “Keywords and Reserved Words”.
- You can refer to tables from different databases in the same statement.

## Security
- A privilege and password system that is very flexible and secure, and that enables host-based verification.
- Password security by encryption of all password traffic when you connect to a server.

## Scalability and Limits
- Support for large databases. We use MySQL Server with databases that contain 50 million records. We also know of users who use MySQL Server with 200,000 tables and about 5,000,000,000 rows.
- Support for up to 64 indexes per table. Each index may consist of 1 to 16 columns or parts of columns. The maximum index width for InnoDB tables is either 767 bytes or 3072 bytes. See Section 15.22, “InnoDB Limits”. The maximum index width for MyISAM tables is 1000 bytes. See Section 16.2, “The MyISAM Storage Engine”. An index may use a prefix of a column for CHAR, VARCHAR, BLOB, or TEXT column types.

## Connectivity
- Clients can connect to MySQL Server using several protocols:
- Clients can connect using TCP/IP sockets on any platform.
- On Windows systems, clients can connect using named pipes if the server is started with the named_pipe system variable enabled. Windows servers also support shared-memory connections if started with the shared_memory system variable enabled. Clients can connect through shared memory by using the --protocol=memory option.
- On Unix systems, clients can connect using Unix domain socket files.
- MySQL client programs can be written in many languages. A client library written in C is available for clients written in C or C++, or for any language that provides C bindings.
- APIs for C, C++, Eiffel, Java, Perl, PHP, Python, Ruby, and Tcl are available, enabling MySQL clients to be written in many languages. See Chapter 28, Connectors and APIs.
- The Connector/ODBC (MyODBC) interface provides MySQL support for client programs that use ODBC (Open Database Connectivity) connections. For example, you can use MS Access to connect to your MySQL server. Clients can be run on Windows or Unix. Connector/ODBC source is available. All ODBC 2.5 functions are supported, as are many others. See MySQL Connector/ODBC Developer Guide.
- The Connector/J interface provides MySQL support for Java client programs that use JDBC connections. Clients can be run on Windows or Unix. Connector/J source is available. See MySQL Connector/J 5.1 Developer Guide.
- MySQL Connector/NET enables developers to easily create .NET applications that require secure, high-performance data connectivity with MySQL. It implements the required ADO.NET interfaces and integrates into ADO.NET aware tools. Developers can build applications using their choice of .NET languages. MySQL Connector/NET is a fully managed ADO.NET driver written in 100% pure C#. See MySQL Connector/NET Developer Guide.

## Localization
- The server can provide error messages to clients in many languages. See Section 10.12, “Setting the Error Message Language”.
- Full support for several different character sets, including latin1 (cp1252), german, big5, ujis, several Unicode character sets, and more. For example, the Scandinavian characters “å”, “ä” and “ö” are permitted in table and column names.
- All data is saved in the chosen character set.
- Sorting and comparisons are done according to the default character set and collation. is possible to change this when the MySQL server is started (see Section 10.3.2, “Server Character Set and Collation”). To see an example of very advanced sorting, look at the Czech sorting code. MySQL Server supports many different character sets that can be specified at compile time and runtime.
- The server time zone can be changed dynamically, and individual clients can specify their own time zone. See Section 5.1.14, “MySQL Server Time Zone Support”.

## Clients and Tools
- MySQL includes several client and utility programs. These include both command-line programs such as mysqldump and mysqladmin, and graphical programs such as MySQL Workbench.
- MySQL Server has built-in support for SQL statements to check, optimize, and repair tables. These statements are available from the command line through the mysqlcheck client. MySQL also includes myisamchk, a very fast command-line utility for performing these operations on MyISAM tables. See Chapter 4, MySQL Programs.
- MySQL programs can be invoked with the --help or -? option to obtain online assistance.

***How to install a MYSQL server on ubuntu?***
===
## Step 1: Installing MySQL
1. First, update the apt package index by typing:
    ```
    $ sudo apt update
    ```
2. Then install the `MySQL package` with the following command: 
    ```
    $ sudo apt install mysql-server
    ```
3. Once the installation is completed, the MySQL service will start automatically. To check whether the MySQL server is running, type:

    `sudo systemctl status mysql`

    >Output:
    ```
    ● mysql.service - MySQL Community Server
    Loaded: loaded (/lib/systemd/system/mysql.service; enabled; vendor preset: enabled)
    Active: active (running) since Wed 2018-06-20 11:30:23 PDT; 5min ago
    Main PID: 17382 (mysqld)
    Tasks: 27 (limit: 2321)
    CGroup: /system.slice/mysql.service-`17382 /usr/sbin/mysqld --daemonize --pid-file=/run/mysqld/mysqld.pid
    ```
## Step 2: Configuring MySQL
Run the security script with `sudo`:
```
$ sudo mysql_secure_installation`
```
This will take you through a series of prompts where you can make some changes to your MySQL installation’s security options. The first prompt will ask whether you’d like to set up the Validate Password Plugin, which can be used to test the strength of your MySQL password.

If you elect to set up the Validate Password Plugin, the script will ask you to choose a password validation level. The strongest level — which you select by entering `2` — will require your password to be at least eight characters long and include a mix of uppercase, lowercase, numeric, and special characters:

>Output:
```
Securing the MySQL server deployment.

Connecting to MySQL using a blank password.

VALIDATE PASSWORD COMPONENT can be used to test passwords
and improve security. It checks the strength of password
and allows the users to set only those passwords which are
secure enough. Would you like to setup VALIDATE PASSWORD component?

Press y|Y for Yes, any other key for No: `Y`

There are three levels of password validation policy:

LOW    Length >= 8
MEDIUM Length >= 8, numeric, mixed case, and special characters
STRONG Length >= 8, numeric, mixed case, special characters and dictionary file
Please enter 0 = LOW, 1 = MEDIUM and 2 = STRONG: 2
 ```

Regardless of whether you choose to set up the Validate Password Plugin, the next prompt will be to set a password for the MySQL **root** user. Enter and then confirm a secure password of your choice:
>Output:

```
Please set the password for root here.

New password:


Re-enter new password:
```

If you used the Validate Password Plugin, you’ll receive feedback on the strength of your new password. Then the script will ask if you want to continue with the password you just entered or if you want to enter a new one. Assuming you’re satisfied with the strength of the password you just entered, enter `Y` to continue the script:

>Output:

```
Estimated strength of the password: 100 
Do you wish to continue with the password provided?(Press y|Y for Yes, any other key for No) : Y
```
From there, you can press `Y` and then `ENTER` to accept the defaults for all the subsequent questions. This will remove some anonymous users and the test database, disable remote root logins, and load these new rules so that MySQL immediately respects the changes you have made.

Note that even though you’ve set a password for the **root** MySQL user, this user is not configured to authenticate with a password when connecting to the MySQL shell. If you’d like, you can adjust this setting by following Step 3.

## Step 3: Testing MySQL

Regardless of how you installed it, MySQL should have started running automatically. To test this, check its status.

```
$ Systemctl status mysql.service
```
>Output:
```
● mysql.service - MySQL Community Server
Loaded: loaded (/lib/systemd/system/mysql.service; enabled; vendor preset: enabled)
Active: active (running) since Tue 2020-04-21 12:56:48 UTC; 6min ago
Main PID: 10382 (mysqld)
Status: "Server is operational"
Tasks: 39 (limit: 1137)
Memory: 370.0M
CGroup: /system.slice/mysql.service
        └─10382 /usr/sbin/mysqld
```
If MySQL isn’t running, you can start it with `sudo systemctl start mysql`.

***How to config a MYSQL server?***
===
## Finding the config files
By default you’ll find MySQL’s configuration files in:

`/etc/mysql`

If they’re not there, however, you can ask mysqld where it looks for its config. Run the command:

`/usr/sbin/mysqld --help --verbose`

You’ll get a flood of text back. The first part describes the options you can send to the server when you launch it. The second part is all the configuration stuff that was set when the server was compiled.

What we’re looking for shows up near the start of the output. Find a couple lines that look like:

`Default options are read from the following files in the given order:
/etc/my.cnf /etc/mysql/my.cnf /usr/etc/my.cnf ~/.my.cnf`

And there we are. The server works down that list until it finds a configuration file.

## my.cnf

With the location in hand, open the my.cnf file and have a look inside.

`/etc/mysql/my.cnf`

Any lines starting with “#” are comments, and they mostly document what the different settings are for. They’re good to read through. You’ll find details like the location of log files and where the database files are kept.

### Config groups

There are lines in the config file that just contain a word in square brackets, like “[client]” or “[mysqld]”. Those are “config groups” and they tell the programs that read the configuration file which parts they should pay attention to.

See, while we’ve been focusing on the server part of MySQL, it’s technically a collection of tools. That includes the server (mysqld), the client (mysql), and some other tools we’ll talk about in a bit. Those programs look in my.cnf to see how they should behave.

There’s a bit more to it, but basically: The “client” config section controls the mysql client, and the “mysqld” section controls the server config.

## Log files
If something does go wrong the best place to start troubleshooting any program is its logs. By default MySQL stores its log files in the directory:

`/var/log/mysql`

You may need to use sudo to get a listing of the files in that directory.

If you don’t find the MySQL logs in the default directory you’ll need to check MySQL’s config. Look in the my.cnf file and look for a “log_error” line, as in:

`log_error = /var/log/mysql/error.log`

If you don’t see a line like that, create one in the “mysqld” section so MySQL will use its own error log. We recommend using the location in the example, creating the “/var/log/mysql” directory if it doesn’t already exist. Then restart MySQL to make the change.

Make sure the log directory you choose can be written to by the user controlling the MySQL process (usually “mysql”). The user running the process will be defined in the “user” config value for mysqld in my.cnf.

### Network settings
There might be a “port” setting under both the client and server config sections. The port under the server section controls what port the server will listen to. By default that’s 3306 but you can change it to anything you’d like.

The port in the client section tells the client what port to connect to by default. You’ll generally want the two port settings to match up.

If you don’t see the port entries in the config file that just means they’re using the default. If you want to change the port you would add the lines in the appropriate categories:

```
[client]
port = 3306

[mysqld]
port = 3306
```

The other network setting to look for is the “bind-address” value. That usually gets set to the address for localhost, 127.0.0.1. By binding to localhost the server makes sure no one can connect to it from outside the local machine.

If you’re running your MySQL server on a different machine from your application you’ll want to bind to a remotely-accessible address instead of localhost. Change the bind-address setting to match your public IP address (or, better, a backend IP address on a network that fewer machines can access).

If you don’t see a “bind-address” entry you should put one into the “mysqld” category to help control access to the server:

```
[mysqld]
bind-address = 127.0.0.1
```

Remember to account for the client’s hostname when you set up your database users and to poke a hole in your firewall if you’re running iptables.

## mysqld and mysqld_safe
Behind the scenes there are actually two versions of the MySQL server, “mysqld” and “mysqld_safe”. Both read the same config sections. The main difference is that mysqld_safe launches with a few more safety features enabled to make it easier to recover from a crash or other problem.

Both mysqld and mysqld_safe will read config entries in the “mysqld” section. If you include a “mysqld_safe” section, then only mysqld_safe will read those values in.

By default the mysql service launches “mysqld_safe”. That’s a good thing, and you should only look to change that if you really know what you’re doing.

## mysqladmin
The mysqladmin tool lets you perform some administrative functions from the command line. We won’t talk much about it here because we’re just trying to get you up and running with enough basics to get by. It’s worth looking at the tool in more depth later to see what it can do, particularly if you need to build scripts that perform functions like checking the status of the server or creating and dropping databases.

## Backups
You have a few options when it comes to making backups of your databases apart from the usual “back up the whole machine” approach. The main two are copying the database files and using mysqldump.

### File copy
By default MySQL creates a directory for each database in its data directory:

`/var/lib/mysql`

Once you’ve found the data directory, hold off a moment before making a copy of it. When the database server is active it could be writing new values to tables at any time. That means if it writes to a table halfway through your copy some files will change and lead to a corrupt backup. Not a good thing if you’re trying to plan for disaster recovery.

To make sure the database files are copied cleanly you can shut the MySQL server down entirely before the copy. That’s safe but isn’t always ideal.

Another approach you can take is to lock the database as read-only for the duration of the copy. Then when you’re done, release the lock. That way your applications can still read data while you’re backing up files.

Lock the databases to read-only by running, from the command line:

```
mysql -u root -p -e "FLUSH TABLES WITH READ LOCK;"
```

To unlock the database when you’re done, run:
```
mysql -u root -p -e "UNLOCK TABLES;"
```
We’re using a new option with the mysql client, “-e”. That tells the client to run the query in quotes as if we’d entered it in the mysql shell proper.

Note that if you’re setting these commands up in a script you can put the password in quotes right after “-p” with no space between the two, as in:

```
mysql -u root -p"password" -e "FLUSH TABLES WITH READ LOCK;"
mysql -u root -p"password" -e "UNLOCK TABLES;"
```
Just make sure you set the permissions on that file to restrict read access. We don’t want just anyone to be able to see that password.

### mysqldump
Another approach to backing up your database is to use the “mysqldump” tool. Rather than copying the database files directly, mysqldump generates a text file that represents the database. By default the text file contains a list of SQL statements you would use to recreate the database, but you can also export the database in another format like CSV or XML. You can read the man page for mysqldump to see all its options.

The statements generated by mysqldump go straight to standard output. You’ll want to specify a file to redirect the output to when you run it. For example:

```
mysqldump -u root -p demodb > dbbackup.sql
```
That command will tell mysqldump to recreate the “demodb” database in SQL statements and to write them to the file “dbbackup.sql”. Note that the username and password options function the same as the mysql client, so you can include the password directly after “-p” in a script.

### Restore from mysqldump
Restoring a mysqldumped database looks similar to what was used to create it, but we use plain old “mysql” instead of “mysqldump”:
```
mysql -u root -p demodb < dbbackup.sql
```
We also change from a greater-than to a less-than sign. That switches the command from redirecting its output to telling it to read its input from the existing file. That input is sent to the “mysql” command, causing the mysqldumped instructions to recreate the database.

Note that by default the SQL statements generated would just add to existing database tables, not overwrite them. If you’re restoring a backup over an existing database you should drop the database’s tables first, or drop and recreate the database itself. You can change that behavior by using the “–add-drop-table” option with the command that creates the mysqldump. That causes mysqldump to add a command to the backup files it writes that will drop tables before recreating them.

## Database engine
The last concept we’ll talk about here is that of the “database engine”. The engine is the process that’s churning away behind the scenes, writing to and reading data from files. You won’t usually need to know anything other than that it’s there, but sometimes you’ll want to run an application that’s been optimized for a particular database engine.

The engine type is set when a table is created. Tables are usually created by the application that’s going to use them, which is why we aren’t going to get into that syntax here.

To see the engine used by your database’s tables you can run the following command in the MySQL shell:

```
SHOW TABLE STATUS FROM demodb;
```
Change “demodb” to the name of your database.

### Choosing an engine
Ideally you won’t need to choose an engine. If you’re not very familiar with MySQL that’s certainly the safest way to go - let the application do its thing, and if you’re writing the application, use the default engine until you’re more comfortable with your options.

If you have a database administrator, do whatever he or she says. They’re smart people, they know what they’re talking about.

The two database engines used most often with MySQL are “MyISAM” and “InnoDB”. The default database engine for MySQL version 5.1 and earlier is MyISAM, while InnoDB is the default database engine starting with MySQL version 5.5.

### MyISAM
Because MyISAM has been the default in MySQL for a while it’s the most compatible choice of the two main engines. Certain types of searches perform better on MyISAM than InnoDB. Just because it’s the older of the two doesn’t mean it can’t be the best for a given application type.

### InnoDB
InnoDB is more fault-tolerant than MyISAM and handles crashes and recovery with a much smaller chance of database corruption. This is a good thing.

The main trouble with InnoDB is that for best performance it requires a lot of tweaking for your environment and access patterns. If you have a DBA that’s no problem, but if you’re a developer who just wants a database up and running for a test server you probably won’t want to deal with tuning InnoDB.

It’s possible you may be running an application that requires InnoDB, and if you’re using MySQL 5.1 or earlier there might not be any settings already in the my.cnf config file. That can be a problem if you’re running on a server that doesn’t have an abundance of memory.

Some settings to get you started with InnoDB on a shared server with 256 megs of RAM are:
```
innodb_buffer_pool_size = 32M
innodb_log_file_size = 8M
innodb_thread_concurrency = 8
innodb_file_per_table
```

Add those to the [mysqld] section of the config file. Again, those are only rough guides - enough to get you running, but definitely not optimized. For that you’ll probably want a DBA, or at least to experiment with incremental changes over time.

***Some example configuration for a database?***
===
## my.cnf file

### Example 1:
```
#
# FromDual configuration file template for MySQL, Galera Cluster, MariaDB and Percona Server
# Location: %MYCNF%
# This template is intended to work with MySQL 5.7 and newer and MariaDB 10.0 and newer
# Get most recent updated from here:
# https://www.fromdual.com/mysql-configuration-file-sample
#

[client]

port                           = %PORT%                              # default 3306
socket                         = %SOCKET%                            # Use mysqld.sock on Ubuntu, conflicts with AppArmor otherwise


[mysql]

no_auto_rehash
max_allowed_packet             = 16M
prompt                         = '\u@\h [\d]> '                      # 'user@host [schema]> '
default_character_set          = utf8                                # Possibly this setting is correct for most recent Linux systems


[mysqldump]

max_allowed_packet             = 16M


[mysqld_safe]                                                        # Becomes sooner or later obsolete with systemd

open_files_limit               = 8192                                # You possibly have to adapt your O/S settings as well
user                           = mysql
log-error                      = %INSTANCEDIR%/log/%UNAME%_%INSTANCE%_error.log   # Adjust AppArmor configuration: /etc/apparmor.d/local/usr.sbin.mysqld


[mysqld]

# Connection and Thread variables

port                           = %PORT%                                # default 3306
socket                         = %SOCKET%                              # Use mysqld.sock on Ubuntu, conflicts with AppArmor otherwise
basedir                        = %BASEDIR%
datadir                        = %DATADIR%
# tmpdir                         = '%INSTANCEDIR%/tmp'
# innodb_tmpdir                  = '%INSTANCEDIR%/tmp'                 # MySQL 5.7

max_allowed_packet             = 16M
default_storage_engine         = InnoDB
# explicit_defaults_for_timestamp = 1                                  # MySQL 5.6, test carefully! This can have an impact on application.
# disable_partition_engine_check  = true                               # Since MySQL 5.7.17 to 5.7.20. To get rid of nasty message in error log

# character_set_server           = utf8mb4                             # For modern applications, default in MySQL 8.0
# collation_server               = utf8mb4_general_ci


max_connections                = 151                                 # Values < 1000 are typically good
max_user_connections           = 145                                 # Limit one specific user/application
thread_cache_size              = 151                                 # Up to max_connections makes sense


# Query Cache (does not exist in MySQL 8.0 any more!)

# query_cache_type               = 1                                   # Set to 0 to avoid global QC Mutex
# query_cache_size               = 32M                                 # Avoid too big (> 128M) QC because of QC clean-up lock!


# Session variables

sort_buffer_size               = 2M                                  # Could be too big for many small sorts
tmp_table_size                 = 32M                                 # Make sure your temporary results do NOT contain BLOB/TEXT attributes

read_buffer_size               = 128k                                # Resist to change this parameter if you do not know what you are doing
read_rnd_buffer_size           = 256k                                # Resist to change this parameter if you do not know what you are doing
join_buffer_size               = 128k                                # Resist to change this parameter if you do not know what you are doing


# Other buffers and caches

table_definition_cache         = 1400                                # As big as many tables you have
table_open_cache               = 2000                                # connections x tables/connection (~2)
table_open_cache_instances     = 16                                  # New default in 5.7


# MySQL error log

log_error                      = %INSTANCEDIR%/log/%UNAME%_%INSTANCE%_error.log   # Adjust AppArmor configuration: /etc/apparmor.d/local/usr.sbin.mysqld
# log_timestamps                 = SYSTEM                              # MySQL 5.7, equivalent to old behaviour
log_warnings                   = 2                                   # MySQL 5.6, equivalent to log_error_verbosity = 3
# log_error_verbosity            = 3                                   # MySQL 5.7, equivalent to log_warnings = 2, MariaDB does NOT support this!
innodb_print_all_deadlocks     = 1
# wsrep_log_conflicts            = 1                                   # for Galera only!


# Slow Query Log

slow_query_log_file            = %INSTANCEDIR%/log/%UNAME%_%INSTANCE%_slow.log   # Adjust AppArmor configuration: /etc/apparmor.d/local/usr.sbin.mysqld
slow_query_log                 = 0
log_queries_not_using_indexes  = 0                                   # Interesting on developer systems!
long_query_time                = 0.5
min_examined_row_limit         = 100


# General Query Log

general_log_file               = %INSTANCEDIR%/log/%UNAME%_%INSTANCE%_general.log   # Adjust AppArmor configuration: /etc/apparmor.d/local/usr.sbin.mysqld
general_log                    = 0


# Performance Schema

# performance_schema             = ON                                  # for MariaDB 10 releases
performance_schema_consumer_events_statements_history_long = ON      # MySQL 5.6/MariaDB 10 and newer


# Binary logging and Replication

server_id                      = %SERVERID%                            # Must be set on MySQL 5.7 and newer if binary log is enabled!
log_bin                        = %INSTANCEDIR%/binlog/%UNAME%_%INSTANCE%_binlog            # Locate outside of datadir, adjust AppArmor configuration: /etc/apparmor.d/local/usr.sbin.mysqld
# master_verify_checksum         = ON                                  # MySQL 5.6
binlog_cache_size              = 1M
binlog_stmt_cache_size         = 1M
max_binlog_size                = 128M                                # Make bigger for high traffic to reduce number of files
sync_binlog                    = 1                                   # Set to 0 or higher to increase write performance
expire_logs_days               = 5                                   # We will survive easter holidays
binlog_format                  = ROW                                 # Use MIXED if you want to experience some troubles
# binlog_row_image               = MINIMAL                             # Since 5.6
# auto_increment_increment       = 2                                   # For Master/Master set-ups use 2 for both nodes
# auto_increment_offset          = 1                                   # For Master/Master set-ups use 1 and 2


# Slave variables

log_slave_updates              = 1                                   # Use if Slave is used for Backup and PiTR
read_only                      = 0                                   # Set to 1 to prevent writes on Slave
# super_read_only                = 0                                   # Set to 1 to prevent writes on Slave for users with SUPER privilege. Since 5.7, not in MariaDB
# skip_slave_start               = 1                                   # To avoid start of Slave thread
# relay_log                      = %UNAME%_%INSTANCE%_relay-bin
# relay_log_info_repository      = table                               # MySQL 5.6
# master_info_repository         = table                               # MySQL 5.6
# slave_load_tmpdir              = '%INSTANCEDIR%/tmp'


# Crash-safe replication Master

# binlog_checksum                = CRC32                               # default
# sync_binlog                    = 1                                   # default since 5.7.6, but slow!
# innodb_support_xa              = 1                                   # default, depracted since 5.7.10


# Crash-safe replication Slave

# master_info_repository         = TABLE
# relay_log_info_repository      = TABLE
# relay_log_recovery             = 1
# sync_relay_log_info            = 1
# relay_log_purge                = 1                                   # default
# slave_sql_verify_checksum      = 1                                   # default


# GTID replication

# gtid_mode                        = ON                                  # Master and Slave
# enforce_gtid_consistency         = 1                                   # Master and Slave

# log_bin                          = %INSTANCEDIR%/binlog/%UNAME%_%INSTANCE%_binlog   # In 5.6 also on Slave
# log_slave_updates                = 1                                   # In 5.6 also on Slave


# Security variables

# local_infile                   = 0                                   # If you are security aware
# secure_auth                    = 1                                   # If you are security aware
# sql_mode                       = TRADITIONAL,ONLY_FULL_GROUP_BY,NO_ENGINE_SUBSTITUTION,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER   # Be careful changing this afterwards
# skip_name_resolve              = 0                                   # Set to 1 if you do not trust your DNS or experience problems
# secure_file_priv               = '%INSTANCEDIR%/tmp'                   # chmod 750, adjust AppArmor configuration: /etc/apparmor.d/local/usr.sbin.mysqld


# MyISAM variables

key_buffer_size                = 8M                                  # Set to 25 - 33 % of RAM if you still use MyISAM
myisam_recover_options         = 'BACKUP,FORCE'
# disabled_storage_engines       = 'MyISAM,MEMORY'                     # MySQL 5.7, do NOT during/before mysql_upgrade, good for Galera!


# MEMORY variables

max_heap_table_size            = 64M                                 # Should be greater or equal to tmp_table_size


# InnoDB variables

innodb_strict_mode             = ON
# innodb_file_format_check       = 1                                   # Desupported in MySQL 8.0
# innodb_file_format             = Barracuda                           # For dynamic and compressed InnoDB tables, default in 5.7
innodb_buffer_pool_size        = 128M                                # Go up to 80% of your available RAM
innodb_buffer_pool_instances   = 8                                   # Bigger if huge InnoDB Buffer Pool or high concurrency

innodb_file_per_table          = 1                                   # Is the recommended way nowadays
# innodb_flush_method            = O_DIRECT                            # O_DIRECT is sometimes better for direct attached storage
# innodb_write_io_threads        = 8                                   # If you have a strong I/O system or SSD
# innodb_read_io_threads         = 8                                   # If you have a strong I/O system or SSD
# innodb_io_capacity             = 1000                                # If you have a strong I/O system or SSD

innodb_flush_log_at_trx_commit = 2                                   # 1 for durability, 0 or 2 for performance
innodb_log_buffer_size         = 8M                                  # Bigger if innodb_flush_log_at_trx_commit = 0
innodb_log_file_size           = 256M                                # Bigger means more write throughput but longer recovery time

                                                                     # Since MariaDB 10.0 and MySQL 5.6
innodb_monitor_enable = all                                          # Overhead < 1% according to PeterZ/Percona


# Galera specific MySQL parameter

# default_storage_engine         = InnoDB                            # Galera only works with InnoDB
# innodb_flush_log_at_trx_commit = 2                                 # Durability is achieved by committing to the Group
# innodb_autoinc_lock_mode       = 2                                 # For parallel applying
# binlog_format                  = row                               # Galera only works with RBR
# query_cache_type               = 0                                 # Use QC with Galera only in a Master/Slave set-up
# query_cache_size               = 0


# WSREP parameter

# wsrep_on                       = on                                  # Only MariaDB >= 10.1
# wsrep_provider                 = /usr/lib/galera/libgalera_smm.so    # Location of Galera Plugin on Ubuntu ?
# wsrep_provider                 = /usr/lib64/galera-3/libgalera_smm.so   # Location of Galera Plugin on CentOS 7
# wsrep_provider                 = none                                # Start mysqld without Galera
# wsrep_provider_options         = 'gcache.size = 1G'                  # Depends on you workload, WS kept for IST

# wsrep_cluster_name             = "My cool Galera Cluster"            # Same Cluster name for all nodes
# wsrep_cluster_address          = "gcomm://192.168.0.2,192.168.0.3"   # Start other nodes like this

# wsrep_node_name                = "Node A"                            # Unique node name
# wsrep_node_address             = 192.168.0.1                         # Our address where replication is done
# wsrep_node_incoming_address    = 10.0.0.1                            # Our external interface where application comes from
# wsrep_sync_wait                = 1                                   # If you need realy full-synchronous replication (Galera 3.6 and newer)
# wsrep_slave_threads            = 16                                  # 4 - 8 per core, not more than wsrep_cert_deps_distance

# wsrep_sst_method               = rsync                               # SST method (initial full sync): mysqldump, rsync, rsync_wan, xtrabackup-v2
# wsrep_sst_auth                 = sst:secret                          # Username/password for sst user
# wsrep_sst_receive_address      = 192.168.2.1                         # Our address where to receive SST


# Group Replication parameter

# default_storage_engine         = InnoDB                              # Group Replication only works with InnoDB
# server_id                      = %SERVERID%                          # Should be different on all 3 nodes
# log_bin                        = %INSTANCEDIR%/binlog/%UNAME%_%INSTANCE%_binlog   # Locate outside of datadir, adjust AppArmor configuration: /etc/apparmor.d/local/usr.sbin.mysqld
# binlog_format                  = ROW
# binlog_checksum                = NONE                                # not default!
# gtid_mode                      = ON
# enforce_gtid_consistency       = ON
# master_info_repository         = TABLE
# relay_log_info_repository      = TABLE
# log_slave_updates              = ON

# slave_parallel_workers         = <n>                                 # 1-2/core, max. 10
# slave_preserve_commit_order    = ON
# slave_parallel_type            = LOGICAL_CLOCK

# transaction_write_set_extraction            = XXHASH64

# loose-group_replication_group_name          = "$(uuidgen)"           # Must be the same on all nodes
# loose-group_replication_start_on_boot       = OFF
# loose-group_replication_local_address       = "192.168.0.1"
# loose-group_replication_group_seeds         = "192.168.0.1,192.168.0.2,192.168.0.3"   # All nodes of Cluster
# loose-group_replication_bootstrap_group     = OFF
# loose-group_replication_single_primary_mode = FALSE                  # = multi-primary
```
### Example 2:
```
[client]
port    = 3306
socket  = /var/run/mysqld/mysqld.sock

# This was formally known as [safe_mysqld]. Both versions are currently parsed.
[mysqld_safe]
socket  = /var/run/mysqld/mysqld.sock
nice    = 0
syslog

[mysqld]
# Basic Settings
user      = mysql
pid-file  = /var/run/mysqld/mysqld.pid
socket    = /var/run/mysqld/mysqld.sock
port      = 3306
basedir   = /usr
datadir   = /var/lib/mysql
tmpdir    = /tmp

lc-messages-dir         = /usr/share/mysql
skip-external-locking

# Engine
default-storage-engine  = InnoDB

# Listening IP
bind-address            = 0.0.0.0

# Safety
max-connect-errors      = 1000000
max_allowed_packet      = 64M
skip-name-resolve
sysdate-is-now          = 1
innodb                  = FORCE
innodb-strict-mode      = 1

wait_timeout            = 60
interactive_timeout     = 60

# Buffers
sort_buffer_size        = 4M
read_buffer_size        = 2M
join_buffer_size        = 8M
read_rnd_buffer_size    = 16M

thread_concurrency      = 8 # Max CPU * 2

# MyISAM
key-buffer-size         = 32M
myisam-recover          = FORCE,BACKUP
myisam_sort_buffer_size = 64M

# CACHES AND LIMITS #
tmp-table-size          = 128M
max-heap-table-size     = 128M
query-cache-type        = 0
query-cache-size        = 0
query_cache_limit       = 1M
max-connections         = 5000
thread-cache-size       = 50
thread_stack            = 192K
open-files-limit        = 65535
table-definition-cache  = 1024
table-open-cache        = 2048

# Bin logs
binlog-format           = ROW
log-bin                 = /var/lib/mysql/mysql-bin
log-slave-updates       = 1
expire-logs-days        = 5
sync-binlog             = 1
max_binlog_size         = 100M

server-id = 1 # randomize it incase of multiple servers

# InnoDB
innodb-buffer-pool-size         = 2048M
innodb_buffer_pool_instances    = 8
innodb_additional_mem_pool_size = 20M
innodb_log_buffer_size          = 8M
innodb-log-files-in-group       = 2
innodb-log-file-size            = 256M
innodb-file-per-table           = 1
innodb-flush-log-at-trx-commit  = 1
innodb-flush-method             = O_DIRECT

# With virtual synchrony redundancy, make write queries faster
innodb_doublewrite              = 1

# This is a recommended tuning variable for performance
innodb_locks_unsafe_for_binlog  = 1

# LOGGING
general_log_file                = /var/log/mysql/mysql.log
log-error                       = /var/log/mysql/mysql-error.log
log-queries-not-using-indexes   = 1

[mysqldump]
quick
quote-names
max_allowed_packet  = 16M

[isamchk]
key_buffer    = 16M

#
# * IMPORTANT: Additional settings that can override those from this file!
#   The files must end with '.cnf', otherwise they'll be ignored.
#
!includedir /etc/mysql/conf.d/
```
***Reference***
===
- https://dev.mysql.com/doc/refman/8.0/en/option-files.html
- https://dev.mysql.com/doc/refman/8.0/en/what-is-mysql.html
- https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-18-04
- https://www.codepedia.org/ama/optimizing-mysql-server-settings/

***Slides***
===
https://docs.google.com/presentation/d/15vf9n3cZnlv0dGI18MB2gXT5Bsaumr4AexBegTCXoYs/edit#slide=id.p
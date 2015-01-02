iann-solr
=========
Project proposal:
https://docs.google.com/document/d/1Qw6AKcrZz_0yeH3X17QdR7wpI_QQ3ICighKecCrXydk/edit?usp=sharing

Tasks
-----
- Get familiar with the current SOLR implementation
- Check out iann-solr from git repository
- Test SOLR running Jetty
- Find the jetty folder with SOLR versions/jetty-solr
- Satart jetty: java -jar start.jar
- Check the GUI … http://localhost:8983/solr/
- Get familiar with the GUI
- Check the configuration file: http://localhost:8983/solr/#/iann/config
versions/customised/jetty_solr-4.1.0/solr/iann/conf/solrconfig.xml

* Check the schema: http://localhost:8983/solr/#/iann/schema
versions/customised/jetty_solr-4.1.0/solr/iann/conf/schema.xml

- Create a proposal for a new schema
- Look at the current schema
- Look at the the fields defined in SASI
- Write a proposal highlighting the differences
- Have a meeting and discuss differences and new implementation
- Make SORL run with the latest version 4.10
- Import the content from the current iAnn SOLR implementation to the new one
- Write a programme to import content from the current version to the new one
- Solrj ia a Java API we used to query and update the SOLR data. But feel free to use any API you like.
- Make SOLR to work in the latest version of Tomcat
- Secure the access to the admin, update and delete function of SOLR
- Build a SOLR war file restricting access to admin, update and delete functions
- Ask Rafa for examples

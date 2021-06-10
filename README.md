# CodeLibrary

Just a simple web based code library for code samples. I found storing snippets
to be a problem because they were not web-based in the IDE and categorization was
too simplified. So CodeLibrary will let the user:
- see your code with syntax highlighting (uses Prism.js)
- create a page of snippets with comments from a template (TODO)
- create a new page with an initial snippet (TODO)
- add a snippet to an existing page (TODO)
- upload html for inclusion in library (after converting html entities) (TODO)
- show home page that automatically parses, categorizes and displays all existing and new html files in the directory
- automatic home page categories with links:
  - By File
  - By #Link
  - By Technology (js, php, html, jquery, etc)
  - By Purpose (Ajax, Tutorial, Service, etc)
- Auto creates links to the various snippets on home page  

## Later On
- Hopefully later on will tie the code library to a SQL server
- Add a feature so people can contribute snippets to a shared library 

## Status
Initial commit: 2021-06-10
Last update: 2021-06-10

## Requirements
Its made to run using a webserver that uses the project root as its document root.
in my setup I only use it internally, so setup a subdomain to IP map in hosts file.

##Attribution
CodeLibrary uses Bootstrap and Prism without any modifications. Thats their software not ours and we don't
claim any hold on theirs whatsoever. As time permits, if necessary, more details will appear here and in the files
so as to comply with their licenses.

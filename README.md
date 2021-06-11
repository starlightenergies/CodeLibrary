# CodeLibrary

CL is just a simple web based code library for code samples. I found storing snippets
to be a problem because they were not web-based in the IDE and categorization was
too simplified. So CodeLibrary will let the user:
- displays code and snippets in a different screen from your IDE
- see your code with syntax highlighting (uses Prism.js)
- create a page of snippets with comments from a template 
- create a new page with an initial snippet (INPROCESS)
- add a snippet to an existing page (TODO)
- upload html for inclusion in library (after converting html entities) (TODO)
- show home page that automatically parses, categorizes and displays all existing and new html files in the directory
- automatic home page categories with links:
  - By File
  - By #Link
  - By Technology (js, php, html, jquery, etc)
  - By Purpose (Ajax, Tutorial, Service, etc)
- Auto creates links to the various snippets on home page 

## Usage
The home page parses all other html files in the directory. No need for
subdirectories. Parsing logic is as follows:
### Home Page Category Creation
  - "By File" column 
      - lists all filenames and creates links to them
  - "By Link" column 
      - lists text in "a data-name=thistext" property and links to it
  - "By Tech" column
      - uses text in "class="xyztech" property and links to it
  - "By Purpose" column
      - uses text in "id=somepurpose" property and links to it

The regex is currently only looking for property names with alphanumeric 
data "[a-z0-9]". 
 

## Later On
- Hopefully later on will tie the code library to a SQL server
- Add a feature so people can contribute snippets to a shared library 

## Status
- Initial commit: 2021-06-10
- Last update: 2021-06-10
- Version: 0.1.0

## Requirements
Its made to run using a webserver that uses the project root as its document root.
in my setup I only use it internally, so setup a subdomain to IP map in hosts file
and restart the network connection, so it re-reads the host file.

## Attribution
CodeLibrary uses Bootstrap and Prism without any modifications. Thats their software not ours and we don't
claim any hold on theirs whatsoever. As time permits, if necessary, more details will appear here and in the files
so as to comply with their licenses.

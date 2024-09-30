#!/bin/bash

# Check if at least one file is provided
if [ $# -eq 0 ]; then
    echo "Usage: $0 file1.php [file2.php ...]"
    exit 1
fi

# Loop through all files provided as arguments
for file in "$@"; do
    if [ -f "$file" ]; then
        echo "Processing $file..."
        if sed -i.bak '/<main>/,/<\/main>/ { 
            # Remove empty <strong> tags or those with only white spaces
            s/<strong>\s*<\/strong>//g;

            # Remove instances of </strong><strong>
            s/<\/strong><strong>//g;

            # Remove <p>&nbsp;</p> and replace &nbsp; with a space
            /<p>&nbsp;<\/p>/d; 
            s/&nbsp;/ /g; 

            # Update <table> and <ul> with specific classes
            s/<table[^>]*>/<table class="beautiful-table">/g; 
            s/<ul[^>]*>/<ul class="arrow-list">/g; 

            # Update <td> and <th> elements
            s/<td[^>]*>/<td>/g; 
            s/<td>.*<\/td>/<td><\/td>/g; 
            s/(h2)//Ig; 
            s/(h3)//Ig; 
            s/<thead>/<tbody>/g; 
            s/<\/thead>/<\/tbody>/g;

            # Replace <th> with <td> and </th> with </td>
            s/<th[^>]*>/<td>/g;
            s/<\/th>/<\/td>/g;

            # Remove <strong> tags inside <h2>
            s/<h2>\s*<strong>\(.*\)<\/strong>\s*<\/h2>/<h2>\1<\/h2>/g;
            s/<h2><strong>\(.*\)<\/strong><\/h2>/<h2>\1<\/h2>/g;

            # Remove <strong> tags inside <h3>
            s/<h3>\s*<strong>\(.*\)<\/strong>\s*<\/h3>/<h3>\1<\/h3>/g;
            s/<h3><strong>\(.*\)<\/strong><\/h3>/<h3>\1<\/h3>/g;

        }' "$file"; then
            echo "$file processed successfully!"
        else
            echo "Error processing $file."
        fi
    else
        echo "$file does not exist."
    fi
done

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Text to HTML CSS Converter</title>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body>
    <div class="container">
        <h1>Word Text to HTML CSS Converter</h1>
        <form id="converter-form">
            <div class="editor">
                <textarea name="editor1" id="editor1" rows="10" cols="80">
                    <h1>Sample Heading 1</h1>
                    <h2>Sample Heading 2</h2>
                    <h3>Sample Heading 3</h3>
                    <p>Sample paragraph text. This is an example content for the converter.</p>
                    <table>
                        <tr>
                            <th>Header 1</th>
                            <th>Header 2</th>
                        </tr>
                        <tr>
                            <td>Data 1</td>
                            <td>Data 2</td>
                        </tr>
                    </table>
                </textarea>
            </div>
            <button type="button" onclick="convertToHTML()">Convert to HTML</button>
        </form>
        <div class="result">
            <h2>Converted HTML</h2>
            <pre id="html-result"></pre>
        </div>
    </div>

    <script>
        CKEDITOR.replace('editor1');

        function convertToHTML() {
            const content = CKEDITOR.instances.editor1.getData();
            document.getElementById('html-result').innerText = content;
        }
    </script>
</body>

</html>

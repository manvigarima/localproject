<script src="https://docraptor.com/docraptor-1.0.0.js"></script>
  <script>
    var downloadPDF = function() {
      DocRaptor.createAndDownloadDoc("YOUR_API_KEY_HERE", {
        test: true, // test documents are free, but watermarked
        type: "pdf",
        document_content: document.querySelector('html').innerHTML, // use this page's HTML
        // document_content: "<h1>Hello world!</h1>",               // or supply HTML directly
        // document_url: "http://example.com/your-page",            // or use a URL
        // javascript: true,                                        // enable JavaScript processing
        // prince_options: {
        //   media: "screen",                                       // use screen styles instead of print styles
        // }
      })
    }
  </script>
  <style>
    @media print {
      #pdf-button {
        display: none;
      }
    }
  </style>

<h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1><h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1>
<h1>Hello this is just a test document </h1>


  <input id="pdf-button" type="button" value="Download PDF" onclick="downloadPDF()" />
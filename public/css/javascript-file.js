/*
This pen shows how to present a PDF file in a browser but prevent the user from downloading the file.

To disable the option to download and/or print the PDF file, set the "showDownloadPDF" and/or the "showPrintPDF" property to false. 
*/
<script>
    var urlToPDF = "https://documentcloud.adobe.com/view-sdk-demo/PDFs/Bodea Brochure.pdf";
      var viewerOptions = {
          embedMode: "FULL_WINDOW",
          defaultViewMode: "FIT_WIDTH",
          showDownloadPDF: false, // false removes the download PDF button from the viewer
          showPrintPDF: false, // false removes the print PDF button from the viewer
          showLeftHandPanel: true,
          showAnnotationTools: false
        }

document.addEventListener("adobe_dc_view_sdk.ready", function () {
  /*
  The clientId is tied to a specific domain. To display a PDF hosted 
  on a different domain using the Adobe View SDK, we need to fetch the file 
  first then pass it to the "content" parameter as a Promise. 
  */
  fetch(urlToPDF)
    .then((res) => res.blob())
    .then((blob) => {
      var adobeDCView = new AdobeDC.View({
        // This clientId can be used for any CodePen example
        clientId: "664497ea18234f0592a12ec3255b9882", 
        // The id of the container for the PDF Viewer
        divId: "adobe-dc-view" 
      });
      adobeDCView.previewFile(
        {
          // The file content
          content: { promise: Promise.resolve(blob.arrayBuffer()) },
          /*
          required - A filename that will be used in the PDF View. 
          The fileName value here does not need to match the filename of 
          the source PDF. If the PDF View permits download, the value 
          of the fileName proprty will be used as the download
          filename. This is also the name that will be passed 
          as the fileName in event objects when events are enabled
          */
          metaData: { fileName: urlToPDF.split("/").slice(-1)[0] }
        },
        viewerOptions
      );
    });
});

// Add arrayBuffer if necessary i.e. Safari
(function () {
  if (Blob.arrayBuffer != "function") {
    Blob.prototype.arrayBuffer = myArrayBuffer;
  }

  function myArrayBuffer() {
    return new Promise((resolve) => {
      let fileReader = new FileReader();
      fileReader.onload = () => {
        resolve(fileReader.result);
      };
      fileReader.readAsArrayBuffer(this);
    });
  }
})();


</script>
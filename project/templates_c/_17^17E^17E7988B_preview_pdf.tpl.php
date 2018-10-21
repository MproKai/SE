<?php /* Smarty version 2.6.19, created on 2017-07-18 06:47:10
         compiled from preview_pdf.tpl */ ?>
<!DOCTYPE html>
<div class="wrapper wrapper-content animated fadeRight">
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">              
                <div>
                     <div class="row m-b-lg m-t-lg">
                        <div class="col-md-12">

                            <div class="profile-image">
                                <img src="images/1.jpg" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins" >
                                            <div id="pt_name" >Alex Smith</div>
                                        </h2>
                                        <h4>

                                        </h4>
                                        <small>
                                            <div id="doc_name" ></div>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
           
                </div>
                <image src="" style="width:100%; height:100%;" frameborder="0" id="img_preview"></image>
                <div id="pdf_content">
                    <div class="text-center pdf-toolbar">
                        <div class="btn-group">
                            <button id="prev" class="btn btn-white"><i class="fa fa-long-arrow-left"></i> <span class="hidden-xs">Previous</span></button>
                            <button id="next" class="btn btn-white"><i class="fa fa-long-arrow-right"></i> <span class="hidden-xs">Next</span></button>
                            <button id="zoomin" class="btn btn-white"><i class="fa fa-search-minus"></i> <span class="hidden-xs">Zoom In</span></button>
                            <button id="zoomout" class="btn btn-white"><i class="fa fa-search-plus"></i> <span class="hidden-xs">Zoom Out</span> </button>
                            <button id="zoomfit" class="btn btn-white"><i style="visibility: hidden" class="fa fa-search-plus"></i> <span class="hidden-xs"> 100%</span> </button>
                            
                   
                            <button class="btn btn-white"><i style="visibility: hidden" class="fa fa-search-plus"></i> <span class="hidden-xs"> Page: </span> </button>
                            <div class="input-group">
                                    
                                <input type="text" class="form-control" id="page_num">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-white" id="page_count">/ 22</button>
                                </div>
                            </div>

                         </div>
                    </div>
                    <div class="text-center m-t-md">
                        <canvas id="the-canvas" class="pdfcanvas border-left-right border-top-bottom b-r-md"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
                 
       



</div>

<script src="js/plugins/pdfjs/pdf.js"></script>




<script>
    <?php echo '
        //
        // If absolute URL from the remote server is provided, configure the CORS
        // header on that server.
        //
        var url = \'./includes/document/4892306.pdf\';


        var pdfDoc = null,
                pageNum = 1,
                pageRendering = false,
                pageNumPending = null,
                scale = 1.5,
                zoomRange = 0.25,
                canvas = document.getElementById(\'the-canvas\'),
                ctx = canvas.getContext(\'2d\');

        /**
         * Get page info from document, resize canvas accordingly, and render page.
         * @param num Page number.
         */
        function renderPage(num, scale) {
            pageRendering = true;
            // Using promise to fetch the page
            pdfDoc.getPage(num).then(function(page) {
                var viewport = page.getViewport(scale);
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);

                // Wait for rendering to finish
                renderTask.promise.then(function () {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        // New page rendering is pending
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });

            // Update page counters
            document.getElementById(\'page_num\').value = num;
        }

        /**
         * If another page rendering in progress, waits until the rendering is
         * finised. Otherwise, executes rendering immediately.
         */
        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num,scale);
            }
        }

        /**
         * Displays previous page.
         */
        function onPrevPage() {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            var scale = pdfDoc.scale;
            queueRenderPage(pageNum, scale);
        }
        document.getElementById(\'prev\').addEventListener(\'click\', onPrevPage);

        /**
         * Displays next page.
         */
        function onNextPage() {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            var scale = pdfDoc.scale;
            queueRenderPage(pageNum, scale);
        }
        document.getElementById(\'next\').addEventListener(\'click\', onNextPage);

        /**
         * Zoom in page.
         */
        function onZoomIn() {
            if (scale >= pdfDoc.scale) {
                return;
            }
            scale += zoomRange;
            var num = pageNum;
            renderPage(num, scale)
        }
        document.getElementById(\'zoomin\').addEventListener(\'click\', onZoomIn);

        /**
         * Zoom out page.
         */
        function onZoomOut() {
            if (scale >= pdfDoc.scale) {
                return;
            }
            scale -= zoomRange;
            var num = pageNum;
            queueRenderPage(num, scale);
        }
        document.getElementById(\'zoomout\').addEventListener(\'click\', onZoomOut);

        /**
         * Zoom fit page.
         */
        function onZoomFit() {
            if (scale >= pdfDoc.scale) {
                return;
            }
            scale = 1;
            var num = pageNum;
            queueRenderPage(num, scale);
        }
        document.getElementById(\'zoomfit\').addEventListener(\'click\', onZoomFit);


        /**
         * Asynchronously downloads PDF.
         */
        PDFJS.getDocument(url).then(function (pdfDoc_) {
            pdfDoc = pdfDoc_;
            var documentPagesNumber = pdfDoc.numPages;
            document.getElementById(\'page_count\').textContent = \'/ \' + documentPagesNumber;

            $(\'#page_num\').on(\'change\', function() {
                var pageNumber = Number($(this).val());

                if(pageNumber > 0 && pageNumber <= documentPagesNumber) {
                    queueRenderPage(pageNumber, scale);
                }

            });

            // Initial/first page rendering
            renderPage(pageNum, scale);
        });
    </script>
'; ?>


</body>

</html>
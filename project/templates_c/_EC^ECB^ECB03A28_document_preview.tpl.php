<?php /* Smarty version 2.6.19, created on 2017-07-21 10:18:28
         compiled from document_preview.tpl */ ?>
<!DOCTYPE html>
<div class="wrapper wrapper-content animated fadeRight">
<button type="button" class="btn btn-outline btn-default pull-right" style="width:5%" onclick="cancel_preview()">X</button>     
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">              
                <div>
                     <div class="row m-b-lg m-t-lg">
                        <div class="col-md-12">

                            <div class="profile-image">
                                <img src="<?php echo $this->_tpl_vars['Patient']['pic']; ?>
" class="img-circle circle-border m-b-md" alt="profile">
                            </div>
                            <div class="profile-info">
                                <div class="">
                                    <div>
                                        <h2 class="no-margins" >
                                            <?php echo $this->_tpl_vars['Patient']['PatientName']; ?>

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
                <!--div id="pdf_content">
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
                </div-->
            </div>
        </div>
    </div>
                 
       



</div>

</body>

</html>
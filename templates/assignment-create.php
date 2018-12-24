<?php include 'inc/header.php'; ?>

<h4>Enter details of your assignment</h4>

<form action="index.php?create" method="POST">
 	<div class="form-group">
     	<input type="text" class="form-control" id="title" placeholder="Enter project title" name="order_title">
    </div>
    <div class="form-group">
         <select class="form-control" id="type_of_paper" name="type_of_paper_id">
         	<option value="0">Select type of paper</option>
         	<?php foreach($papertypes as $papertype): ?>
         	<option value="<?php echo $papertype->type_id ;?>"><?php echo $papertype->name ;?></option>
         	
        <?php endforeach; ?>
                            
         </select>
     </div>

    <div class="form-group">
    	<div class="form-group">
            <select class="form-control" id="subject_area" name="subject_area_id">
            	<option value="0">Select subject</option>
            	<?php foreach($papersubjects as $papersubject): ?>
                    <option value="<?php echo $papersubject->subject_id ;?>"><?php echo $papersubject->name ;?></option>
                 <?php endforeach; ?>
            </select>
        </div>

    
	<div class="form-check-inline">
<label class="form-check-label">
    <input type="radio" class="form-check-input" name="quality_level" value="Basic">Basic
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="quality_level" value="Premium">Premium
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="quality_level" value="Elite">Elite
</div>

    
 <div class="form-group">


                        <select class="form-control" id="number_of_pages" name="number_of_pages">

                        	<option>Select number of pages</option>
                            <option>1 page</option>
                            <option>2 pages</option>
                            <option>3 pages</option>
                            <option>4 pages</option>
                            <option>5 pages</option>
                            <option>6 pages</option>
                            <option>7 pages</option>
                            <option>8 pages</option>
                            <option>9 pages</option>
                            <option>10 pages</option>
                        </select>
                  </div>
                 <div class="form-group">
                   
                        <select class="form-control" id="urgency" name="urgency">
                        	 <option>Select Deadline</option>
                            <option>14 days</option>
                            <option>10 days</option>
                            <option>7 days</option>
                            <option>5 days</option>
                            <option>4 days</option>
                            <option>3 days</option>
                            <option>48 hours</option>
                            <option>24 hours</option>
                            <option>12 hours</option>
                            <option>6 hours</option>
                        </select>
    </div>
        <div class="form-group">
                   
                        <select class="form-control" id="number_of_sources" name="number_of_sources">

                        	<option>Select number of sources</option>
                            <option>1</option>
                            <option>2 </option>
                            <option>3 </option>
                            <option>4 </option>
                            <option>5 </option>
                            <option>6 </option>
                            <option>7 </option>
                            <option>8 </option>
                            <option>9 </option>
                            <option>10 </option>
                        </select>
                  </div>


<div class="form-group">
  
  <textarea class="form-control" rows="5" id="detailed_instructions" name="detailed_instructions"placeholder="Enter detailed instructions for your project"></textarea>
</div>
<div class="form-group">
     	<input type="text" class="form-control" id="title" placeholder="Total price" name="total_price">
    </div>

<input type="hidden" name="tracking_no" value="<?php echo rand();?>">
                   
    <button type="submit" class="btn btn-primary btn-block" name="create" value="create">Create</button>
  </form>


<?php include 'inc/footer.php'; ?>
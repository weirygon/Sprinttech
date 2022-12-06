<form method="POST" enctype="multipart/form-data" >
    <div class="form-group">
        <label></label>
        <input type="file" id="image" name="image" class="from-control-file">  
    </div>

</form>

<!-- 
    Para colocar no controller
    //image upload
    if($request->hasFile('image') ** request->file('image'))-> isValid()){
        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->get().strtotime("now")).".".extension;
        $request->image->move(public_path('img/doctor'), $imageName);
        
    }
    $event->save()
    return redirect('/')
-->
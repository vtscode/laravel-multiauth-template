<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multi Level restrict</title>
</head>
<body>
	@admin('editor')
    	<button> This is visible to editor only</button>
	@endadmin

	@admin('publisher,super')
	    <button> This is visible to super admin and publisher</button>
	@endadmin
</body>
</html>
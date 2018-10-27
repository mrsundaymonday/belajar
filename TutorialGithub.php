Tutorial git hub

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tutorial Github</title>
</head>
<body>
	<pre>
		<code>
			* login dan create repo di github

			* copy link repo misal : "https://github.com/mrsundaymonday/belajar.git"

			A. Clone(Download)
				Masuk ke lokasi folder yang ingin di clone
			  1. git clone https://github.com/mrsundaymonday/belajar.git

			B. Push(Upload)
			  1. git init
			  2. git add .(semua) / git add [namafile](per nama file)
			  3. git commit -m "pesan"
			  4. git remote add origin [repo_url]
			  5. git remote -v //verify repo
			  6. git push origin master 

				Error:	Github “Updates were rejected because the remote contains work that you do not have”

			  apabila error pada saat langkah "push" seperti diatas,
			  maka pastikan repo yang dituju sudah benar dengan cara (git remote -v) selanjutnya 
			  lakukan force push.
			  
			  7. git push -f origin master.

			  =====================================

			C. log & Diff
				Log untuk melihat log perubahan terakhir. sedangkan diff digunakan untuk membandingkan perubahan apa saja yang telah dilakukan terhadap file.

			  1. Log
			  	 command: # git log / # git log [nama file] /  # git log [kode commit]
			  2. Diff
			  	 command: #git diff [kode commit]

			D. Undo Push / Reverse Commit
			   Terdapat 3 Kondisi yaitu:
				1. Kondisi Sebelum stage/modified
					command: # git checkout [nama file]
					command ini sangat berbahaya, dapat menghapus isi dari file yang telah dibuat.

				2. Kondisi sudah di Stage
					command: # git reset [nama file]
					mengembalikan kondisi dari staged kedalam kondisi modified lagi.

				3. Kondisi sudah commit
					command: #git checkout [kode commit] [nama file]

					kode commit dapat diperoleh dengan cara #git log

			E. Mengganti Repo yang sudah dicommit
				* git remote set_url origin [git repo baru]




		</code>		
	</pre>

</body>
</html>
 


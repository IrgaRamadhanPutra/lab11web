<?php  
namespace App\Controllers;  
class Page extends BaseController 
{     
public function about()     
	{         
	return view('about', [
		'title' => 'Halaman About',
		'content' => 'Ini adalah halamam about yang menjelaskan tentang isi halaman ini.'
	]);  
	}  
    public function contact()     
	{         
	return view('contact', [
		'title' => 'Halaman Contact',
		'content' => 'Anda dapat menghubungi contact berikut : kampusmerdekakita@gmail.com'
	]);     
	}  
    public function faqs()     
	{         
	return view('faqs', [
		'title' => 'Halaman faqs',
		'content' => 'AAda pertanyaan ? Silahkan kunjungi Faqs berikut kampusmerdeka@kita.co.id.'
	]);   
	} 
	public function tos()
	{
	return view('tos', [
		'title' => 'Halaman tos',
		'content' => 'Untuk customer service bisa kunjungi halaman berikut.'
	]); 
	}
} 
?>

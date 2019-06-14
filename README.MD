1. Create database named localdb and set collation to 'utf8_unicode_ci'.
2. Edit .env file and change database to 'localdb'.
3. in config/database.php make sure You have following charset and collation parameters:

'charset' => 'utf8',
'collation' => 'utf8_unicode_ci',

4. Edit App\AppServiceProvider.php and make sure You have included:

	use Illuminate\Support\Facades\Schema;
	public function boot()
	{
    		Schema::defaultStringLength(191);
	}
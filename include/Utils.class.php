<?php

/* 
 * Class Utils
 * 
 */

class Utils 
{
	
   protected static $local_params = array();
	
	
	
	/**
     * GÈnÈration pagination ‡ partir de la page courante ($current),
     * du nombre d'items total ($total), et du nombre d'items par page ($bypage).
     * $listLength reprÈsente la longueur d'items de la pagination ‡ gÈnerer
     *
     * @param int $current
     * @param int $total
     * @param int $bypage
     * @param int $listLength
     * @param bool $showLast Toggle l'affichage du dernier ÈlÈment de la pagination
     * @return array
     */
    public static function getGenericPagination($current, $total, $bypage, $listLength=11, $showLast = true, $use_icon = false)
    {
        if ($total <= $bypage)
            return false;

        $total = ceil($total / $bypage);

        if ($total < $current)
            return false;

        $length = ($listLength / 2);

        $begin = $current - ceil($length);
        if ($begin < 1)
        {
            $begin = 1;
        }

        $end = $begin + $listLength;
        if($end > $total)
        {
            $begin -= ($end - $total);
            $end = $total;
        }
        if ($begin < 1)
        {
            $begin = 1;
        }
        if($end==($total-1)) {
            $end = $total;
        }
        if($begin == 2) {
            $begin = 1;
        }
        $out = array();

        if ($current > 1) {
            $out[] = array('id' => $current - 1, 'label' =>  (empty($use_icon) ? '&laquo; ' : '') . dgettext('global', '&laquo'), 'class' => 'prev' . (!empty($use_icon) ? ' prev-icon' : ''), 'accesskey' => 'a');
        }

        if ($begin > 1) {
            $out[] = array('id' => 1, 'label' => '1 ...', 'class' => 'first');
        }

        for ($i = $begin; $i <= $end; $i++)
        {
            $out[] = array('id' => $i, 'label' => $i, 'class' => ($i == $current) ? 'active' : '');
        }

        if ($showLast && $end < $total) {
            $out[] = array('id' => $total, 'label' => '... ' . $total, 'class' => 'last');
        }

        if ($current < $total) {
            $out[] = array('id' => $current + 1, 'label' => dgettext('global', '&raquo') . (empty($use_icon) ? ' &raquo;' : ''), 'class' => 'next' . (!empty($use_icon) ? ' next-icon' : ''), 'accesskey' => 'z');
        }

        return $out;
    }
  

    private static function _strftime_force_am_pm($src_format, $src_value)
    {
        // si pas de %p on ne se prend pas la tete
        if (!empty($_SERVER['PROD']) || strpos($src_format, '%p') === false || strftime('%p') != '')
            return strftime($src_format, $src_value);

        // si y a du %p, alors on commence ‡ agir
        // on commence par laisser une trace la ou il y a le %p
        $src_format = str_replace('%p','ZZ%pZZ', $src_format);
        $v = strftime($src_format, $src_value);

        // si on chope ZZZZ c'est que la locale ne gËre pas AM/PM
        // on va alors le faire pour elle...
        if (strpos($v, 'ZZZZ') !== false)
        {
            $v = str_replace('ZZZZ', (strftime('%H', $src_value) < 12 ? 'AM' : 'PM'), $v);
        }
        // on vire les eventuels ZZ qui restent
        return str_replace('ZZ', '', $v);
    }

 	/**
     * Renvoie une date formattÈe localement ‡ partir d'un timestamp
     */
    public static function formatDate($time, $format='LONG', $params = array())
    {
        switch ($format)
        {
            case 'SHORT':
            case 'short':
                $date = self::_strftime_force_am_pm(self::$local_params['date_short'], $time);
                break;
            case 'MONTH':
            case 'month':
                $date = self::_strftime_force_am_pm(self::$local_params['date_month'], $time);
                break;
            case 'FANCY':
            case 'FANCY_LONG':
            {
                if (date('Ymd') == date('Ymd', $time))
                {
                    if ($format == 'FANCY_LONG')
                        $date = self::_strftime_force_am_pm(dgettext('global', "Aujourd'hui ‡ %H:%M"), $time);
                    else
                        $date = dgettext('global', "Aujourd'hui");
                }
                elseif (date('Ymd') - 1 == date('Ymd', $time))
                {
                    if ($format == 'FANCY_LONG')
                        $date = self::_strftime_force_am_pm(dgettext('global', "Hier ‡ %H:%M"), $time);
                    else
                        $date = dgettext('global', "Hier");
                }
                else
                {
                    if ($format == 'FANCY_LONG')
                        $date = self::_strftime_force_am_pm(self::$local_params['date_long'], $time);
                    else
                        $date = self::_strftime_force_am_pm(self::$local_params['date_short'], $time);
                }
                break;
            }
            case 'REDUCE':
            {
                /* Le mktime(0,0,0) correspond au jour actuel ‡ 00h00 */
                if ($time >= mktime(0,0,0) && !empty($params['reduce_today_date']))
                {
                    /* Si la date est aujourd'hui, on retourne seulement l'heure */
                    $date = self::_strftime_force_am_pm(self::$local_params['date_reduce_hour'], $time);
                } else {
                    /* Sinon on retourne que la date jj/mm/aa */
                    $date = self::_strftime_force_am_pm(self::$local_params['date_reduce'], $time);
                }
                break;
            }
            case 'PRECISE':
                $date = self::_strftime_force_am_pm(self::$local_params['date_precise'], $time);
                break;
            case 'PRECISEWITHSECONDS':
                $date = self::_strftime_force_am_pm(self::$local_params['date_precisewithseconds'], $time);
                break;
            case 'DAYMONTH':
                $date = self::_strftime_force_am_pm(self::$local_params['date_daymonth'], $time);
                break;
            default:
                $date = self::_strftime_force_am_pm(self::$local_params['date_long'], $time);
                break;
        }
        return $date;
    }


	/**/
	public static function getDateBegin ($day=0)
	{		
		$date = date("Y-m-d", mktime(0, 0, 0, date('m'), date('d')-$day, date('Y') ) ); 
		return $date;
		
	}
	
	
	/*
	 * Clean le campaignId de la chaine OasDefault/
	 * @param : $campaignId
	 */	
	public static function cleanCampaignId($campaignId)
	{
		$prefixe = 'OasDefault\/';
		$pattern = '/'.$prefixe.'(\w+)/i';
		$replacement = '${1}';
		$result = preg_replace($pattern, $replacement, $campaignId);
		return $result;
	}
		
	/*
	 *
	 *
	 */
	public static function baseName($file)
	{
		return basename($file);
	}	
	
	

	//fonction pour re-ecrire les url
	public static function format_url($chaine) { 

		// en minuscule
	    $chaine=strtolower($chaine);

		// supprime les caracteres speciaux
	    $accents = Array("/È/", "/Ë/", "/Í/","/Î/", "/Á/", "/‡/", "/‚/","/·/","/‰/","/„/", "/Â/", "/Ó/", "/Ô/", "/Ì/", "/Ï/", "/˘/", "/Ù/", "/Ú/", "/Û/", "/ˆ/");
	    $sans = Array("e", "e", "e", "e", "c", "a", "a","a", "a","a", "a", "i", "i", "i", "i", "u", "o", "o", "o", "o");
	    $chaine = preg_replace($accents, $sans, $chaine);  
	    $chaine = preg_replace('#[^A-Za-z0-9]#', '-', $chaine);

	   // Remplace les tirets multiples par un tiret unique
	   //$chaine = ereg_replace( "\-+", '-', $chaine );

	   // Supprime le dernier caractËre si c'est un tiret
	   $chaine = rtrim( $chaine, '-' );

	    while (strpos($chaine,'--') !== false) 
			$chaine = str_replace('--', '-', $chaine);

	    return $chaine; 

	}

	
	/*
	 *
	 *
	 */
	public static function getFormatedUrl($format, $id, $titre)
	{		
		return sprintf($format, $id, self::format_url($titre));		
	}
	
	
	
	/*
	 *
	 *
	 */
	public static function emailChecker($email) 
	{ 
	   $Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#'; 
	   if(preg_match($Syntaxe,$email)) 
	      return true; 
	   else 
	     throw new Exception ('Mail incorrect'); //return false; 
	}

	/*
	 *
	 *
	 */
	public static function validateMsisdn($msisdn)
	{
		$formats = array('##-##-##-##-##', '## ## ## ## ##', '##########');
		//
		$msisdn = trim($msisdn);

		$format = ereg_replace("[0-9]", "#", $msisdn);

		if( !in_array($format, $formats) )
			throw new Exception ('KO format');

		$number = ereg_replace("[:punct:]", "", $msisdn);

		if( !preg_match("/^[0]{1}[0-9]{9}$/", $msisdn) ) 
			throw new Exception ('KO preg');
	}
	
	
	public function checkCp($value)
	{
		return preg_match('#^[0-9]{5}$#', $value);
	}
	
	/*
	 *
	 *
	 */
	public static function get404 ( $smarty )
	{   
		if (!headers_sent()) {
            header('HTTP/1.1 404 Not Found');
        }		
		$smarty->display('404.tpl');
		exit();
	}
	
	
	/*
	 *
	 *
	 */
	public static function dateConv($value) 
	{
		$final = strftime('CrÈÈ le %A %d %B %Y ‡ %H:%M:%S', strtotime($value));
		return $final;
	}
	
	
	public static function test () {
		var_dump($_SERVER);
	}
	
	
		
}

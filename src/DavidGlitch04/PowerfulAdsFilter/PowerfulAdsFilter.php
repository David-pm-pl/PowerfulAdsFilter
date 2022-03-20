<?php 

namespace DavidGlitch04\PowerfulAdsFilter;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class PowerfulAdsFilter extends PluginBase{

    protected function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
    }

    /**
     * @param string $ip
     * @return bool
     */
    public function isIP($ip): bool{
        if(filter_var($ip, FILTER_VALIDATE_IP)){
            return true;
        } else{
            return false;
        }
    }
}
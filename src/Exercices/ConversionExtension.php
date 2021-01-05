<?php

namespace App\Exercices;

use Exercices\Extension\AbstractExtension;
use Exercices\TwigFilter;

class ConversionExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            
            new TwigFilter('euros', [$this, 'formatEuro']),
            # création d'un nouveau filtre 
            new TwigFilter('price', [$this, 'formatPrice']),
            # création d'un nouveau filtre
        
        ];
    }

    public function formatEuro($prix)
    {
        return number_format($prix, 2, ',', ' ').' €';
        # retourne le format du nombre qui prend en paramètre le prix avec deux chiffres à la fin une virgule et un espace avant €
    }

    public function formatPrice($prix, $format)
    {
        if ($format === 'us') 
        # Si le format est au format us
        {
            return '$'.number_format($prix, 2, '.', ',');
            # retourne $ le format du nombre qui prend en paramètre le prix avec deux chiffres à la fin et un point pour séparer les éléments
        }
        elseif ($format === 'fr') 
        {
            return number_format($prix, 2, ',', ' ').' €';
        }
        else
        {
            return $prix;
        }
    }
}

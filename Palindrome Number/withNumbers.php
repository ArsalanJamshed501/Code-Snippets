class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x < 0) {
            return false;
        } elseif($x == 0) {
            return true;
        }
        
        $y = 0;
        $z = $x;

        while($z >= 1) {
            $y *= 10;
            $y += $z%10;
            $z /= 10;
        }
        if($y == $x) {
            return true;
        }
        return false;
    }
}
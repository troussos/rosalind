instances x (y:ys)
	| x==y = 1+(instances x ys)
	| otherwise = instances x ys

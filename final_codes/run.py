import sys
from  logsql import testing1 as test
uname=sys.argv[1]
pas=sys.argv[2]
# print(uname,pas)
one=test([uname])
two=test([pas])
if one==1 or two ==1 :
    print(1)
else:
    print(0)


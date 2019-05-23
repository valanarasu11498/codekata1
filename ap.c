#include <stdio.h>
int main()
{
    int sum,b,m,e,i;
    sum=0;
    scanf("%d%d%d",&m,&b,&e);
    sum=(m*(2*b+(m-1)*e))/2;
    printf("%d",sum);
            return 0;
}
